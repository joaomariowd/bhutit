<?php

use App\Classes\BhutHandler;
use App\Classes\BhutItHandler;
use App\Classes\ItHandler;
use App\Classes\NumberHandler;

require "vendor/autoload.php";

$bhut = new BhutHandler();
$it = new ItHandler();
$bhutIt = new BhutItHandler();
$number = new NumberHandler();

$bhut
    ->setNext($it)
    ->setNext($bhutIt)
    ->setNext($number);

for ($i=1; $i <= 100 ; $i++) { 
    $result = $bhut->handle($i);
    echo $result . "\n";
}
