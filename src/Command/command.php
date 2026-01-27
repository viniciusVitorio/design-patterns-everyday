<?php

use App\Command\Button\Button;
use App\Command\Button\SaveCommand;

require '../../vendor/autoload.php';

$button = new Button(new SaveCommand());
$button->click();
