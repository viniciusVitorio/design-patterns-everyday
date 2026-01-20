<?php

namespace App\Strategy;

use App\Strategy\TaxInterface;

class TaxCalculator
{
    private TaxInterface $taxCalculator;

    public function __construct(TaxInterface $taxCalculator) {
        $this->taxCalculator = $taxCalculator;
    }

    public function calculate(float $value) {
        return $this->taxCalculator->calculate($value);
    }
}