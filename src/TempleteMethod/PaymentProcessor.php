<?php

namespace App\TempleteMethod;

abstract class PaymentProcessor
{
    final public function process(): void
    {
        $this->validate();
        $this->charge();
        $this->sendReceipt();
    }

    abstract protected function validate(): void;
    abstract protected function charge(): void;

    protected function sendReceipt(): void
    {
        echo "Receipt sent\n";
    }
}
