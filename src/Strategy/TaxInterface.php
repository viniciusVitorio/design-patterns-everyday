<?php

namespace App\Strategy;

interface TaxInterface
{
    public function calculate(float $amount): float;
}