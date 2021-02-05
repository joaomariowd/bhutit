<?php

namespace App\Services;

use App\Handlers\ItHandler;
use App\Handlers\BhutHandler;
use App\Handlers\BhutItHandler;
use App\Handlers\NumberHandler;

class ChainOfHandlers {
    
    private static $chain;

    private function __construct(){}

    public static function get()
    {
        if(self::$chain == null) {
            self::make();
        }

        return self::$chain;
    }

    protected static function make()
    {
        $bhut = new BhutHandler();
        $it = new ItHandler();
        $bhutIt = new BhutItHandler();
        $number = new NumberHandler();

        $bhut
            ->setNext($it)
            ->setNext($bhutIt)
            ->setNext($number);

        self::$chain = $bhut; 
    }
}