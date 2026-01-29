<?php

namespace App\ChainOfResponsability;

class UserHandler extends AbstractHandler
{
    public function handle(string $role): void
    {
        if ($role === 'user') {
            echo "Handled by User\n";
            return;
        }

        parent::handle($role);
    }
}
