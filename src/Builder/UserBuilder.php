<?php

namespace App\Builder;

class UserBuilder
{
    private string $name;
    private string $email;
    private bool $admin = false;
    private bool $active = true;

    public static function create(): self
    {
        return new self();
    }

    public function withName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function withEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function asAdmin(): self
    {
        $this->admin = true;
        return $this;
    }

    public function inactive(): self
    {
        $this->active = false;
        return $this;
    }

    public function build(): User
    {
        return new User(
            $this->name,
            $this->email,
            $this->admin,
            $this->active
        );
    }
}
