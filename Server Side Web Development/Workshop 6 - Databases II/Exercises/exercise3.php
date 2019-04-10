<?php

// Make a connection
$connDB = mysqli_connect(
  "localhost",
  "user",
  "",
  "U6")

  or die("Connection failed." . mysqli_error($connDB));

// Query
$queryGuesses = "SELECT * FROM correct_guesses";

// Get results
$results = $connDB->query($queryGuesses);

// Show
while($row = mysqli_fetch_array($results)) {
  echo $row["user_id"] . ' - ' . $row["answer"] . ' - ' . $row["guessed_on"] . "<br>";
}

?>
