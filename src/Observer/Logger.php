<?php

namespace App\Observer;

class Logger implements ObserverInterface
{
    public function update(): void
    {
        echo "Log: button click registered\n";
    }
}
