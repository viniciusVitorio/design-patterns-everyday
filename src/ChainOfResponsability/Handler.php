<?php

namespace App\ChainOfResponsability;

interface Handler
{
    public function setNext(Handler $handler): Handler;
    public function handle(string $role): void;
}
