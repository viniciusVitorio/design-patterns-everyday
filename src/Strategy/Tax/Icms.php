<?php

namespace App\Strategy\Tax;

use TaxInterface;

class Icms implements TaxInterface {
    public function calculate(float $amount) : float
    {
        return $amount * 0.18;
    }
}