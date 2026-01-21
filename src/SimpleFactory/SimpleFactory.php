<?php

require '../../vendor/autoload.php';

use App\SimpleFactory\TaxFactory;

$taxCalculator = TaxFactory::create('ipi');

echo $taxCalculator->calculate('100') . PHP_EOL;