<?php

namespace App\Classes;

class BhutItHandler extends AbstractHandler
{
    public function handle($number): string
    {
        if ($number % 5 === 0 AND $number % 3 === 0) {
            return "BHUT IT";
        } 
        
        return $this->next($number);   
    }
}
