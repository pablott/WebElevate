<?php

$number = $_GET['mychoice'];

switch ($number) {
  case '1':
  $message = "equals 1";
    break;
  case '2':
  $message = "equals 2";
    break;
  case '3':
    $message = "equals 3";
    break;
  default:
    $message = "not equals to 1, 2 or 3";
    break;
}

echo $message;
?>
