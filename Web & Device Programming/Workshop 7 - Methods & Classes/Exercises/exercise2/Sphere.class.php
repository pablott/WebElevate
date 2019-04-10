<?php

/**
 * Sphere class
 */
class Sphere
{
  private $radius;

  public function __construct()
  {
    # code...
  }

  public function setRadius($radius) {
    $this->radius = $radius;
    // I output $radius from here because it is within the scope of the class
    echo 'Radius set to: ' . $radius;
  }
}

$my_sphere = new Sphere;
$my_sphere->setRadius(15);
// echo $radius won't work here because it is private

?>
