<?php

use App\Builder\UserBuilder;

require '../../vendor/autoload.php';

$user = UserBuilder::create()
    ->withName('Vinicius')
    ->withEmail('vinicius@email.com')
    ->asAdmin()
    ->build();

var_dump($user);