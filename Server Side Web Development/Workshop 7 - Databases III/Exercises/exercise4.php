<?php

class myDB {

  private $connDB;
  private $queryGuesses;
  private $saveQuery;

  public function __construct($host, $username, $password, $dbname) {
    // Make a connection
    $this->connDB = mysqli_connect($host, $username, $password, $dbname)
    /*  "localhost",
      "user",
      "",
      "U6")*/

      or die("Connection failed." . mysqli_error($this->connDB));
  }

  public function listScores() {
    // Query
    $this->queryGuesses = "SELECT * FROM correct_guesses"; // or die("Query error" . mysqli_error($this->connDB));
    //echo $this->queryGuesses;

    // Get results
    $results = $this->connDB->query($this->queryGuesses);

    // Return
    return $results;
  }

  public function saveGuess($user_id,$answer) {
    $today = date("Y-m-d");
    $this->saveQuery = "INSERT INTO `correct_guesses`(`user_id`, `answer`, `guessed_on`) VALUES ('".$user_id."', '".$answer."', '".$today."')";
    echo '<br>saveQuery: '.$this->saveQuery;
    $this->connDB->query($this-> saveQuery);
  }
}


// Initialize DB object
$gameDB = new myDB('localhost','user','','U7');

// Save some guesses
for ($i=0; $i < 5; $i++) {
  $gameDB->saveGuess($i, rand(1,6));
}

// Show
$scores = $gameDB->listScores();
echo var_dump($scores);
while($row = mysqli_fetch_array($scores)) {
  //echo $row['answer'] . '<br>';
  echo $row["user_id"] . ' - Guess: ' . $row["answer"] . ' - Date: ' . $row["guessed_on"] . "<br>";
}

?>
