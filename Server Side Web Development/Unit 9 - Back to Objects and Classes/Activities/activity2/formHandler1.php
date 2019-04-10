<?php
$myAge1 = $_GET['myAge'];
$myAge2 = $_POST['myAge'];

echo 'GET: ';
var_dump($_GET);

echo 'POST: ';
var_dump($_POST);

echo 'Your age is ' . $myAge1 . '(GET)<br>';
echo 'Your age is ' . $myAge2 . '(POST)';


 ?>
