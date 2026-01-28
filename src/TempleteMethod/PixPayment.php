<?php

namespace App\TempleteMethod;

class PixPayment extends PaymentProcessor
{
    protected function validate(): void
    {
        echo "Validating PIX\n";
    }

    protected function charge(): void
    {
        echo "Processing PIX payment\n";
    }
}