<?php
namespace App\Strategy\Tax;

use App\Strategy\TaxInterface;

class Ipi implements TaxInterface {

    public function calculate(float $amount) : float
    {
        return $amount * 0.05;
    }
}