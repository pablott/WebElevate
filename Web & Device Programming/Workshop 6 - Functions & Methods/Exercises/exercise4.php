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

  public function changeFruits()
  {
    // this array is only accessed here, so there is no need to declare it outside 
    $more_fruits = array('Avocado', 'Pear', 'Tomato');
    for ($i=0; $i < sizeOf($this->fruits); $i++) {
      // Change the initial array with new values
      $this->fruits[$i] = $more_fruits[$i];
    }
  }
}

// Show initial list
$list = new ShoppingList;
echo $list->getFruits();

// Show the new list
$list->changeFruits();
echo '<br>New list:<br>';
echo $list->getFruits();

?>
