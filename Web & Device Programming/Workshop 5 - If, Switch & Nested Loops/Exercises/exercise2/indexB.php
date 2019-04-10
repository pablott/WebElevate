<?php

$varA = 1;
$varB = 1;

if ($varA && $varB) {
  $message = "Postive result, both are true";
}
else {
  // We set message for both being false, even if this condition
  // is triggered by only one beoing false
  $message = "Both are false";
}
// Then we evaluate if only one is false and update the message
if ($varA && !$varB) {
  $message = "B is false";
}
if (!$varA && $varB) {
  $message = "A is false";
}

echo $message;

?>
