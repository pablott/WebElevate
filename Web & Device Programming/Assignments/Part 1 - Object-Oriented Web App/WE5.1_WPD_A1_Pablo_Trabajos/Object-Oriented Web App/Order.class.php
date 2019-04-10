<?php

/**
 * Order class
 * an abstraction of a document representing a job order
 */
class Order
{
  private $number;    // int
  private $paintColor;// int
  private $car;       // string
  private $descriptions = array(); // array with hardcoded data and randomized price

  // set the initial values on creation with a constructor method
  public function __construct($favColour)
  {
    // set the initial values on creation
    $this->number = rand(0, 1000);
    // the car's paint is selected based on favourite color
    $this->paintColor = $favColour;
    // we set the car's description with a private function
    $this->car = $this->setCarDesc($favColour);
  }

  // private function for creating a computed description string
  private function setCarDesc($index){
    // we extend the array for description creating a indexed, multi-dimensional array,
    // first two elements are arrays with 3 subelements each, last element is an int for the price;
    // $favColour works as index for the subarrays in this context
    $this->descriptions['color'] = array('blue', 'pink', 'black');
    $this->descriptions['design'] = array('cool', 'vibrant', 'classic');
    $this->descriptions['price'] = rand(10000, 15000) + $this->paintColor*100;
    // return computed car's description
    return 'Your car is ' . $this->descriptions['color'][$index] . ', ' . $this->descriptions['design'][$index] . ' design, ' . $this->descriptions['price'] . ' eur.';
  }

  // public getter functions for private properties number and car
  public function getNumber(){
    return $this->number;
  }

  public function getCarDesc(){
    return $this->car;
  }
}

?>
