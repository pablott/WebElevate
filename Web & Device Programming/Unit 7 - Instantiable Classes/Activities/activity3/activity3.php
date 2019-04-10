<?php

class MyClass {
  private $myVar = 100;

  public function getMyVar(){
    return $this->myVar;
  }
}
$mc = new MyClass;
echo $mc->getMyVar();

?>
