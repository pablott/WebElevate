<?php

/* Order creator based on profile properties
 * Author: Pablo Trabajos, June 2017
 *
 * Requirements (taken from Assignment document):
 *  1. A number of classes spanning several PHP files
 *  2. A basic web form to collect some user input.
 *  3. A method of passing data into your instantiated classes. This code does not need to be fully OO.
 *  4. A selection of functions which accept user supplied data and use this to create a custom response.
 *  5. One or more functions to report the results of the query back to the user.
 *
 * Considerations:
 *  As a general rule, all properties and function of classes are private except where
 *  strictly neccessary.
*/


// import Client class, we need it to create a customer profile
include('Client.class.php');

// get form values from _GET supervariable
$name = $_GET['my_name'];
$favColour = $_GET['my_color'];


/*
 * Main sequence
*/
// create a Client object with name & favourite colours as arguments
$client = new Client($name, $favColour);
// get the associated Order object, too
$currentOrder = $client->getOrder();

// this part is encapsulated in a condition
// as a crude input validation
if (strlen($name) > 0) {
  // display customer info first
  echo '<h3>Customer Profile:</h3>';
  echo 'Name: ' . $client->getName();
  echo '<br>Favourite colour: ' . $client->getFavColour();
  echo '<br>Order: ' . $currentOrder->getNumber();

  // display order info second
  echo '<h3>Placed Order: #' . $currentOrder->getNumber() . '</h3>';
  echo 'Description of your car: ' . $currentOrder->getCarDesc();

  // var_dump($client); // DEBUG uncomment to see the object's dump
}
else { // my_name was left empty
  echo 'No name was introduced.';
}

?>
