<?php

// Make a connection
$connDB = mysqli_connect(
  "localhost",
  "user",
  "",
  "myDB")

  or die("Connection failed.");

// Query
$queryPeople = "SELECT * FROM people";

// Get results
$results = $connDB->query($queryPeople);

// Show
while($row = mysqli_fetch_array($results)) {
  echo $row["id"] . ' - ' . $row["name"] . "<br>";
}

?>
