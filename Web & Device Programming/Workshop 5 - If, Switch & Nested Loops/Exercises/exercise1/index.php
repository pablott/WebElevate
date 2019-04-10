<?php

$month = $_GET['mymonth'];
$isSunny = $_GET['myweather'];

if ($month.length > 0)
{
  echo 'Selection: ' . $month;
  echo '<br>Is it sunny?: ' . $isSunny;
}
else {
  echo 'No month selected';
}
 ?>
