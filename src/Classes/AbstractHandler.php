<?php
namespace App\Classes;

use App\Interfaces\Handler;

abstract class AbstractHandler implements Handler
{
    /**
     * @var Handler
     */
    private $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        
        return $handler;
    }

    public function next(int $number): string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($number);
        }

        return null;
    }
}