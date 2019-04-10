<?php

// Include classes
include('NumberGenerator.class.php');
include('Dice.class.php');
include('myDB.class.php');


//Main code block
class Game {
  private $gameDB;

  // Initialize DB object
  public function __construct() {
    $this->gameDB = new myDB('localhost','user','','U7');
  }


  public function listGuesses() {
    return $this->gameDB->listScores();
  }


  public function guessHandler() {
    $guess = new NumberGenerator();
    $currentGuess = $guess->makeAGuess();
    return $currentGuess;
  }


  public function diceHandler() {
    $dice = new Dice();
    $dice->throwDice();
    $diceNumber = $dice->getFaceValue();
    return $diceNumber;
  }



  // Throw dice to generate a faceValue
  public function play() {
    // Three guesses
    for ($i=0; $i < 3; $i++) {
      // Generate a guess
      $nextGuess = $this->guessHandler();
      $diceNumber = $this->diceHandler();

      echo 'Dice value: ' . $diceNumber . ', ';
      echo 'Guess was: ' . $nextGuess . '<br>';

      if ($nextGuess == $diceNumber ) {
        echo 'Guess number ' . ($i+1) . ' was correct!<br>';
        $is_correct = 1;
        // Save results
        $this->gameDB->saveGuess(1, $nextGuess, $is_correct);

        break;
      }
      else {
        echo 'Guess number ' . ($i+1) . ' was incorrect!<br>';
        $is_correct = 0;
        // Save results
        $this->gameDB->saveGuess($i, $nextGuess, $is_correct);
      }
    } // for
  } // play
}

?>
