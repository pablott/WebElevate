<?php

include('Sphere.class.php');

/**
 * Deposit class
 * Each depsoit creates a Sphere object and calculates
 * capacity based on 90% of getVolume.
 */
class Deposit
{
  private $capacity;
  private $my_sphere;

  public function __construct($radius){
    $this->my_sphere = new Sphere($radius);
    $this->capacity = $this->calcAvailabeCapacity($this->my_sphere);
  }

  // calculate available capacity
  private function calcAvailabeCapacity($my_sphere) {
    echo '<br>Total volume: ' . $my_sphere->getVolume();
    return $my_sphere->getVolume() * .9;
  }

  // public function for getting available capacity
  public function getAvailableCapacity() {
    return $this->capacity;
  }
}

$my_deposit = new Deposit(10);
echo '<br>Available capacity (90%): ' . $my_deposit->getAvailableCapacity();

?>
