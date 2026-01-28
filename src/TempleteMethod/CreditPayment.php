<?php

namespace App\TempleteMethod;

class CreditPayment extends PaymentProcessor
{
    protected function validate(): void
    {
        echo "Validating credit card\n";
    }

    protected function charge(): void
    {
        echo "Charging credit card\n";
    }
}
