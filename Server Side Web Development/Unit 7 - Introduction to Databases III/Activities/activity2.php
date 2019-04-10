<?php

/*
Using the PHP Date Functions
Using the date functions listed here:
http://php.net/manual/en/function.date.php
Calculate the sunrise time in Dublin today
Latitude: 53.35
North Longitude: 6.26 West
Zenith ~=90
offset: +0GMT
*/

//date_default_timezone_set('UTC');
$sunrise = date("D M d Y") . ', sunrise time: ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 53.35, 6.26, 90, 0);

echo $sunrise;

?>
