<?php

declare(strict_types=1);

namespace Domain\Auth\Actions;

use Domain\Auth\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Domain\Auth\DTOs\RegisterUserDTO;
use Illuminate\Auth\Events\Registered;
use Domain\Auth\Contracts\RegisterUserContract;

class RegisterUser implements RegisterUserContract
{
    public function __invoke(RegisterUserDTO $params): User
    {
        $user = User::create([
            'name' => $params->name,
            'email' => $params->email,
            'password' => Hash::make($params->password),
        ]);

        $this->attachUserRole($user);

        event(new Registered($user));

        return $user;
    }

    private function attachUserRole(User $user): void
    {
        $role = Role::where('name', 'user')->first();
        $user->assignRole($role->id);
    }
}
