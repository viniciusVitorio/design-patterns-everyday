<?php

namespace App\Factory\Tax;

use App\Factory\TaxInterface;

class Ipi implements TaxInterface {

    public function calculate(float $amount) : float
    {
        return $amount * 0.05;
    }
}