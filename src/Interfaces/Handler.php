<?php
namespace App\Interfaces;

interface Handler {
    public function setNext(Handler $handler): Handler;

    public function handle(int $number): string;
}