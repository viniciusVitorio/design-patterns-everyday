<?php

namespace App\ChainOfResponsability;

class AdminHandler extends AbstractHandler
{
    public function handle(string $role): void
    {
        if ($role === 'admin') {
            echo "Handled by Admin\n";
            return;
        }

        parent::handle($role);
    }
}
