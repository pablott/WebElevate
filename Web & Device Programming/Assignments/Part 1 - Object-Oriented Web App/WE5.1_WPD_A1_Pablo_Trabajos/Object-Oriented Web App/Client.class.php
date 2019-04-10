<?php

include('Order.class.php');

/**
 * Client class
 * contains a basic customer profile and an associated order
 */
class Client
{
  private $name;      // str
  private $favColour; // int
  private $order;     // object

  // set the initial values on creation with a constructor method
  public function __construct($name, $favColour)
  {
    $this->name = $name;
    $this->favColour = $favColour;
    // getting an Order object requires calling a dedicated function
    // and settting it as this Client's order
    $this->order = $this->placeOrder($favColour);
  }

  // private function for creating an Order object based on favourite color
  private function placeOrder($favColour){
    return new Order($favColour);
  }

  // public getter functions for  private properties name, favourite colour and order
  public function getName(){
    return $this->name;
  }

  public function getFavColour(){
    // we want to return a human readable value, not just a number
    // so this switch translates the number into a word
    switch ($this->favColour) {
      case 0:
        return 'blue';
        break;

        case 1:
          return 'pink';
          break;

        case 2:
          return 'black';
          break;
    }
  }

  public function getOrder(){
    return $this->order;
  }
}


?>
