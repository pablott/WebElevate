<?php

class myDB {

  public $queryGuesses;
  public $connDB;

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
    $this->queryGuesses = "SELECT * FROM correct_guesses WHERE is_correct";// or die("Query error" . mysqli_error($this->connDB));
    //echo $this->queryGuesses;

    // Get results
    $results = $this->connDB->query($this->queryGuesses);

    // Return
    return $results;
  }
}

// Initialize and show
$gameDB = new myDB('localhost','user','','U6');
$scores = $gameDB->listScores();

// Show
echo var_dump($scores);
while($row = mysqli_fetch_array($scores)) {
  //echo $row['answer'] . '<br>';
  echo $row["user_id"] . ' - Guess: ' . $row["answer"] . ' - Date: ' . $row["guessed_on"] . ' - ' . $row["is_correct"] . "<br>";
}

?>
