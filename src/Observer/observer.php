<?php

use App\Observer\Analytics;
use App\Observer\Button;
use App\Observer\Logger;

require '../../vendor/autoload.php';

$button = new Button();
$button->attach(new Logger());
$button->attach(new Analytics());

$button->click();
