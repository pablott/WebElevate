<?php

class myDB {

  private $connDB;
  private $guessesQuery;
  private $saveQuery;

  public function __construct($host, $username, $password, $dbname) {
    // Make a connection
    $this->connDB = mysqli_connect($host, $username, $password, $dbname)
      or die("Connection failed." . mysqli_error($this->connDB));
  }


  public function listScores() {
    // Query
    $this->guessesQuery = "SELECT * FROM correct_guesses"; // or die("Query error" . mysqli_error($this->connDB));
    //echo $this->guessesQuery;

    // Get results
    $results = $this->connDB->query($this->guessesQuery);

    // Return
    return $results;
  }


  public function saveGuess($user_id,$answer,$is_correct) {
    $today = date("Y-m-d");
    $this->saveQuery = "INSERT INTO `correct_guesses`(`user_id`, `answer`, `is_correct`, `guessed_on`) VALUES ('".$user_id."', '".$answer."', '".$is_correct."', '".$today."')";
    echo 'saveQuery: '.$this->saveQuery . '<br><br>';
    $this->connDB->query($this->saveQuery);
  }
}


?>
