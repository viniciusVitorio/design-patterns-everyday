<?php

require '../../vendor/autoload.php';

use App\Factory\Tax\Factories\IpiFactory;

$IpiFactory = new IpiFactory();
$taxCalculator = $IpiFactory->create();

echo $taxCalculator->calculate('100') . PHP_EOL;