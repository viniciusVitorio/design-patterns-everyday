<?php

namespace App\Command\Button;

use App\Command\Command;

class Button
{
    public function __construct(private Command $command) {}

    public function click(): void
    {
        $this->command->execute();
    }
}
