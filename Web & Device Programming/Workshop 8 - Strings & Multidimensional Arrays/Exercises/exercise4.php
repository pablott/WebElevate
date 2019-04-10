<?php

$myArray = array();
$myArray[0] = new SplFixedArray(3); // Important: set the length of subarrays or the second for
$myArray[1] = new SplFixedArray(3); // won't detect any valid sizeOf
$letter;

// dump initialized multidimensional array
var_dump($myArray);

// add random numbers
for ($i=0; $i < sizeOf($myArray); $i++) { // use sizeOf because is an array, not a string
  for ($j=0; $j < sizeOf($myArray[$i]); $j++) {
    // populate every element with a rand form 1 to 20
    $myArray[$i][$j] = rand(1, 20);
    // echo $myArray[$i][$j] . '<br>';
  }
}

// add a random letter
for ($i=0; $i < sizeOf($myArray); $i++) {
  for ($j=0; $j < sizeOf($myArray[$i]); $j++) {
    // calculate a random letter
    $letter = chr(rand(65, 90)); //only capitals letters in ASCII
    // echo $letter;
    // prepend random letter
    $myArray[$i][$j] = $letter . $myArray[$i][$j];
    // echo $myArray[$i][$j] . '<br>';
  }
}

// dump populated multidimensional array
var_dump($myArray);

?>
