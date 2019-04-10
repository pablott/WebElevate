<?php

/**
 * String class
 */
class String
{
  private $string;
  private $numberOfCharacters;
  private $i = 0;
  private $isE = 0;

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
    // TODO: I have tried to do this with and OR operator like 'e'||'E' inside the while but does not work
    // we move index $i as long as the letter is not 'e'
    while ($this->i < $this->numberOfCharacters && !$this->isE) {
      // echo ($this->isE);
      if ($this->string{$this->i} == 'e') {
        // set flag because we found match, this breaks the while loop
        $this->isE = 1;
        // we can reuse isUse as a variable for storing the index value
        // I do it this way because I have to pass '0' when nothing was found
        // (passing index would pass the string length in case nothing was found)
        $this->isE = $this->i;
      }
      else {
        // not 'e', go to next iteration,
        // $isE will remain 0 if no 'e' was found
        $this->i++;
      }
    }
    // And simply return $isE
    return $this->isE;
  }
}

$my_string = new String('The quick brown fox jumps over the lazy dog');
echo 'getUppercase is: ' . $my_string->getUppercase();
echo '<br>getLowercase is: ' . $my_string->getLowercase();
echo '<br>Position of first e is (relative to 0): ' . $my_string->getFirstE();
echo '<br>String length: ' . strlen($my_string->getLowercase());

?>
