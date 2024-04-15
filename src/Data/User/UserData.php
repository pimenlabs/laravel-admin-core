<?php

namespace BalajiDharma\LaravelAdminCore\Data\User;

use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public string $name,
        public string $email,
        public ?string $password,
        public ?array $roles
    ) {
    }
}