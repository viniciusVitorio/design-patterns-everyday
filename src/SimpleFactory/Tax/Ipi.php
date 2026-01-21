<?php
namespace App\SimpleFactory\Tax;

use App\SimpleFactory\TaxInterface;

class Ipi implements TaxInterface {

    public function calculate(float $amount) : float
    {
        return $amount * 0.05;
    }
}