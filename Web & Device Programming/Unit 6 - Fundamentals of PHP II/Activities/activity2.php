<?php

/**
 *
 */
class AutoHelloBot
{
  private $message = 'Hi there';
  public function getMessage()
  {
    return $this->message;
  }
}

$bot = new AutoHelloBot;
echo $bot->getMessage();

?>
