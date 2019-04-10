<?php

class MyClass {
  private $myVar = 100;
}
$mc = new MyClass;
echo $mc->myVar; // $myVar is private and cannot be accesed out of the scope of MyClass

?>
