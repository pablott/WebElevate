<?php

/**
 * Sphere class
 */
class Sphere
{
  private $radius;
  private $area;
  private $volume;

  public function __construct($radius)
  {
    // set radius
    $this->radius = $radius;
    echo 'Radius set to: ' . $this->radius;

    // calculate area
    $this->area = $this->calcArea($radius);

    // calculate volume
    $this->volume = $this->calcVolume($radius);
  }

  // functions for calculating area and volume
  private function calcArea($radius) {
    return 4 * pi() * pow($radius, 2);
  }

  private function calcVolume($radius) {
    return (4/3) * pi() * pow($radius, 3);
  }

  // getters functions for diameter, area and volume
  public function getDiameter() {
    return $this->radius * 2;
  }

  public function getArea() {
    return $this->area;
  }

  public function getVolume() {
    return $this->volume;
  }
}

$my_sphere = new Sphere(10);
echo '<br>Diameter is: ' . $my_sphere->getDiameter();
echo '<br>Area is: ' . $my_sphere->getArea();
echo '<br>Volume is: ' . $my_sphere->getVolume();
?>
