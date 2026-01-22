<?php

namespace App\Factory\Tax\Factories;

use App\Factory\Tax\Icms;
use App\Factory\TaxInterface;

class IcmsFactory extends TaxFactory
{
    public function create(): TaxInterface {
        return new Icms();
    }
}