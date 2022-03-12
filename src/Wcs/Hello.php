<?php
class Hello
{
  public function talk()
  {
    return "Hello World !";
  }
}

$hello = new Hello();
$greeting = $hello->talk();

var_dump($greeting);
