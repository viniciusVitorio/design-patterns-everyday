<?php

require '../../vendor/autoload.php';

use App\TempleteMethod\CreditPayment;

$payment = new CreditPayment();
$payment->process();