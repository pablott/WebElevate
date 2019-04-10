<?php

// Include classes
include('NumberGenerator.class.php');
include('Dice.class.php');

//Main code block
class Game {

  private $guesses = array();

  public function saveGuess($number) {
    array_push($this->guesses, $number);
    return $guesses;
  }


  public function listGuesses() {
    var_dump($this->guesses);
  }


  public function guessHandler() {
    $guess = new NumberGenerator();
    $currentGuess = $guess->makeAGuess();
    $this->saveGuess($currentGuess);
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
        break;
      }
      else {
        echo 'Guess number ' . ($i+1) . ' was incorrect!<br><br>';
      }
    }
  }
}


// Main code block
$myGame = new Game();
$myGame->play();
$myGame->listGuesses();

?>
