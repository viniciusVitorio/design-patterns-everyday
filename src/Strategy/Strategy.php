<?php

require '../../vendor/autoload.php';

use \App\Strategy\Tax\Ipi;
use App\Strategy\TaxCalculator;

$calculator = new TaxCalculator(new Ipi());

echo $calculator->calculate(100);