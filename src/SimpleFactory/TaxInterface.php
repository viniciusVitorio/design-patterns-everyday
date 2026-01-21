<?php

namespace App\SimpleFactory;

interface TaxInterface
{
    public function calculate(float $amount): float;
}