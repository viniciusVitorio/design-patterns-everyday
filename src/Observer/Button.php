<?php

namespace App\Observer;

class Button
{
    private array $observers = [];

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function click(): void
    {
        echo "Button clicked\n";
        $this->notify();
    }

    private function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }
}
