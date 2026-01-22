<?php

namespace App\Factory;

abstract class TaxFactory
{
    abstract function create(): TaxInterface;
}