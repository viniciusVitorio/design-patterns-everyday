<?php

namespace App\Factory;

use App\Factory\Tax\Icms;

class IcmsFactory extends TaxFactory
{
    public function create(): TaxInterface {
        return new Icms();
    }
}