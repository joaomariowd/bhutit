<?php

namespace App\Classes;

class BhutHandler extends AbstractHandler
{
    public function handle($number): string
    {
        if ($number % 3 === 0 AND $number % 5 !== 0) {
            return "BHUT";
        } 
        
        return $this->next($number);
    }
}
