<?php

namespace App\Command\Button;

use App\Command\Command;

class DeleteCommand implements Command
{
    public function execute(): void
    {
        echo "Deleting...\n";
    }
}
