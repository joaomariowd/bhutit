<?php

namespace App\Handlers;

class ItHandler extends AbstractHandler
{
    public function handle($number): string
    {
        if ($number % 5 === 0 AND $number % 3 !== 0) {
            return "IT";
        } 
        
        return $this->next($number);   
    }
}
