<?php
require '../../vendor/autoload.php';

use App\ChainOfResponsability\AdminHandler;
use App\ChainOfResponsability\UserHandler;

$admin = new AdminHandler();
$user = new UserHandler();

$admin->setNext($user);

$admin->handle('user');
