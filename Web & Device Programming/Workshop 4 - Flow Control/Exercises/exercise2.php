<?php
$area = 25;
$lowerLimit = 20;
$upperLimit = 40;
$globalLimit = 60;

// I have assumed perfect size is >= $lowerLimit && <= $upperLimit
// Check if number is within limits
if ($area<$globalLimit) {
  // Check if too small
  if ($area<$lowerLimit) {
    print("Area is too small: " . $area);
  }
  else {
    // If not too small, check if not too big
    if ($area>$upperLimit) {
      print("Area is too big: " . $area);
    }
    // If not too big equal or bigger than $lowerLimit then it is the perfect size
    else {
      print("Perfect size: " . $area);
    }
  }
} else {
  print("Out of limits (" . $globalLimit . "): " . $area);
}
 ?>

