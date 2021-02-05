<?php

namespace App\Handlers;

class NumberHandler extends AbstractHandler
{
    public function handle($number): string
    {
        if ($number % 5 != 0 AND $number % 3 != 0) {
            return $number;
        } 
        
        return $this->next($number);
    }
}