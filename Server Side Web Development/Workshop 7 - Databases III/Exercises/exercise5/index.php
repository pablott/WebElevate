<?php

// Include classes
include('Game.class.php');



// Main code block
$myGame = new Game();
$myGame->play();


// Show
$scores = $myGame->listGuesses();

echo '<br><br>List guesses<br>';
while($row = mysqli_fetch_array($scores)) {
  echo $row["user_id"] . ' - Guess: ' . $row["answer"] . ' - Is correct? ' . $row["is_correct"] . ' - Date: ' . $row["guessed_on"] . "<br>";
}




?>
