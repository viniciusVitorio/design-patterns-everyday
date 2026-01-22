<?php

namespace App\Factory\Tax\Factories;

use App\Factory\TaxInterface;

abstract class TaxFactory
{
    abstract function create(): TaxInterface;
}