<?php

namespace App\Factory\Tax\Factories;

use App\Factory\Tax\Ipi;
use App\Factory\TaxInterface;

class IpiFactory extends TaxFactory
{
    public function create(): TaxInterface {
        return new Ipi();
    }
}