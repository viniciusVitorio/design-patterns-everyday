<?php

namespace App\SimpleFactory\Tax;

use App\SimpleFactory\TaxInterface;

class Icms implements TaxInterface {
    public function calculate(float $amount) : float
    {
        return $amount * 0.18;
    }
}