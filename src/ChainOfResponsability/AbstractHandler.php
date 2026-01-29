<?php

namespace App\ChainOfResponsability;

abstract class AbstractHandler implements Handler
{
    private ?Handler $next = null;

    public function setNext(Handler $handler): Handler
    {
        $this->next = $handler;
        return $handler;
    }

    public function handle(string $role): void
    {
        if ($this->next) {
            $this->next->handle($role);
        }
    }
}
