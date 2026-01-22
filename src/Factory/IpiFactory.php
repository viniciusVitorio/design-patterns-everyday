<?php

namespace App\Factory;

use App\Factory\Tax\Ipi;

class IpiFactory extends TaxFactory
{
    public function create(): TaxInterface {
        return new Ipi();
    }
}