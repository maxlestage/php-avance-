<?php
require dirname(__DIR__) . "/vendor/autoload.php";
use CowSay\Cow;

$bessie = new Cow("Hello, Farm!");

echo $bessie;
