<?php

declare(strict_types=1);

namespace Domain\Auth\Actions;

use Domain\Auth\Models\User;
use Illuminate\Support\Facades\Hash;
use Domain\Auth\DTOs\RegisterUserDTO;
use Domain\Auth\Contracts\RegisterUserContract;

class RegisterUser implements RegisterUserContract
{
    public function __invoke(RegisterUserDTO $params): User
    {
        return User::create([
            'name' => $params->name,
            'email' => $params->email,
            'password' => Hash::make($params->password),
        ]);
    }
}
