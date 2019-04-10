<?php

$varA = 1;
$varB = 1;

if ($varA) {
  if ($varB) {
    $message = "Postive result, both are true";
  }
  else {
    $message = "Negative result, B is false";
  }
}
else {
  $message = "Negative result, A is false";
}

echo $message;

?>
