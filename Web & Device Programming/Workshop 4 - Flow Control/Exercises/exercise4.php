<?php

$number = 10;
$endValue = 101;

// while loop iterates along the all the numbers.
while ($number < $endValue) {
  print("Number: " . $number . "<br>");
  // IMPORTANT: reinitialize this to 1 per each number processed
  // The first iteration of N/N-1 always gives a remainder,
  // so we can assume that at least the first iteration won't be divisable.
  $isPrime = 1;

  // The following loop iterates N/N-1 as long as divisor is bigger than 1
  // and $isPrime state is not changed. It can only change when the module is zero,
  // meaning the number is divisible and not prime. Only one case like this is enough
  // to set $isPrime to zero nad break the for loop in the next iteration.
  // We skip dividing a number by itself.
  for ($divisor=$number-1; $divisor>1 && $isPrime==1; $divisor--) {
    if ($number%$divisor) {
      print("- " . $number . "/" . $divisor . " - remainder (undivisible): " . $number%$divisor . "<br>");
      $isPrime = 1;
    }
    else {
      print("- " . $number . "/" . $divisor . " - no remainder (divisible, not a prime!!! ): " . $number%$divisor . "<br>");
      $isPrime = 0;
    }
  }

  // Depending on $isPrime status we compose different summaries.
  if ($isPrime) {
    print("<b>" . $number . " is a prime number.</b>");
  }
  else {
    print($number . " is not a prime number.");
  }
  print("<br><br>"); // Separate each processed number with a couple of line breaks
  $number++;
}
 ?>

