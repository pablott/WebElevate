<?php
// Since I don't know of any rule for going from one Fibonacci to previous,
// so I will use two vars for keeping past and current Fibonaccis
// and thus calculate next one.
$currNumber = 1; // current Fibonacci number, also starting point. 1 or higher.
$prevNum = 0; // following Fibonacci number
$countFibonaccis = 0;
$maxFibonaccis = 20;
$average = 0;


for ($currNumber; $countFibonaccis < $maxFibonaccis; $countFibonaccis++) {
  // Calculate average in each iteration, so it is constantly updated.
  // The chunk summing all previous numbers is $countFibonaccis*$average
  $average = (($countFibonaccis*$average)+$currNumber) / ($countFibonaccis+1); // +1 to avoid division by zero

  // Print the line
  print($currNumber . " (iteration: " . ($countFibonaccis+1) . ", prev: " . $prevNum . ", avg: " . $average . ")<br>");

  // New Fibonaccis is always F(n)=F(n-1)+F(n-2)
  // Think of this as F(n-1)==$currNumber, F(n-2)==$prevNum
  $currNumber = $currNumber + $prevNum;
  // If I make $prevNum = $currNumber both will have the same value
  // on next loop and the result would be a power of 2.
  $prevNum = $currNumber-$prevNum;
}
print ("<br>Average: " . $average);
 ?>

