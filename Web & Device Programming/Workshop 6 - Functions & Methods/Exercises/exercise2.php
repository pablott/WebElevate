<?php

function getFruits()
{
  // declare array inside the function
  $fruits = array('Apple', 'Orange', 'Kiwi');
  for ($i=0; $i < sizeOf($fruits); $i++) {
    echo $fruits[$i] . '<br>';
  }
}
getFruits();

?>
