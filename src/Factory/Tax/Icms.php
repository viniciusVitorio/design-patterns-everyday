<?php

namespace App\Factory\Tax;

use App\Factory\TaxInterface;

class Icms implements TaxInterface {
    public function calculate(float $amount) : float
    {
        return $amount * 0.18;
    }
}