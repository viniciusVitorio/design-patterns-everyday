<?php

namespace App\Builder;

class User
{
    public function __construct(
        public string $name,
        public string $email,
        public bool $admin,
        public bool $active
    ) {}
}