<?php

/**
 * String class
 */
class String
{
  private $string;
  private $numberOfCharacters;
  private $i = 0;

  public function __construct($string)
  {
    // set string value
    $this->string = $string;

    // count number of chars and save in a variable
    $this->numberOfCharacters = strlen($string);
  }

  // getters functions for UPPERCASE, lowercase and finding first 'e'
  public function getUppercase() {
    return strtoupper($this->string);
  }

  public function getLowercase() {
    return strtolower($this->string);
  }

  public function getFirstE() {
    // TODO: I have tried to do this with and OR operator like 'e'||'E'
    // we move index $i as long as the letter is not 'e'
    while ($this->i < $this->numberOfCharacters && ($this->string{$this->i} != 'e') ) {
      // echo $this->i . '<br>' . $this->string{$this->i};
      $this->i++;
    }
    // And simply return the index after the while breaks ()when letter is 'e'
    return $this->i;
  }
}

$my_string = new String('The quick brown fox jumps over the lazy dog');
echo 'getUppercase is: ' . $my_string->getUppercase();
echo '<br>getLowercase is: ' . $my_string->getLowercase();
echo '<br>Position of first e is (relative to 0): ' . $my_string->getFirstE();
echo '<br>String length: ' . strlen($my_string->getLowercase());

?>
