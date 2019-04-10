<?php

class ShoppingList
{
  // declare array inside the class
  private $fruits = array('Apple', 'Orange', 'Kiwi');

  public function getFruits()
  {
    for ($i=0; $i < sizeOf($this->fruits); $i++) {
      echo $this->fruits[$i] . '<br>';
    }
  }
}

$list = new ShoppingList;
echo $list->getFruits();

?>
