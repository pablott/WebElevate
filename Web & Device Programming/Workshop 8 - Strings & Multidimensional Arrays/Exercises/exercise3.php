<?php

$myArray = array();
$myArray[0] = new SplFixedArray(3); // Important: set the length of subarrays or the second for
$myArray[1] = new SplFixedArray(3); // won't detect any valid sizeOf

// dump initialized multidimensional array
var_dump($myArray);

for ($i=0; $i < sizeOf($myArray); $i++) {
  for ($j=0; $j < sizeOf($myArray[$i]); $j++) {
    // populate every element with a rand form 1 to 20
    $myArray[$i][$j] = rand(1, 20);
    // echo $myArray[$i][$j] . '<br>';
  }
}

// dump populated multidimensional array
var_dump($myArray);

?>
