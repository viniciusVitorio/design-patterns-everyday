<?php

namespace App\Factory;

interface TaxInterface
{
    public function calculate(float $amount): float;
}