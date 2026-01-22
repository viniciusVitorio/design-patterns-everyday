<?php

require '../../vendor/autoload.php';

use App\Factory\IpiFactory;

$IpiFactory = new IpiFactory();
$taxCalculator = $IpiFactory->create();

echo $taxCalculator->calculate('100') . PHP_EOL;