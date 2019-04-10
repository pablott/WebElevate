<?php

$number = $_GET['mychoice'];
$complete = FALSE;

while (!$complete) {
  for ($i=1; $i <= $number ; $i++) {
    echo "Number is currently equal to " . $i . "<br>";
  }
  $complete = TRUE;
}

echo "While loop has finished";
?>
