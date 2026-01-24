<?php

namespace App\Observer;

class Analytics implements ObserverInterface
{
    public function update(): void
    {
        echo "Analytics: click sent\n";
    }
}
