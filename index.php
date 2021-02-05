<?php
use App\Services\ChainOfHandlers;

require "vendor/autoload.php";

$chain = ChainOfHandlers::get();

for ($i=1; $i <= 100 ; $i++) { 
    $result = $chain->handle($i);
    echo $result . "\n";
}
