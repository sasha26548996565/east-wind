<?php

declare(strict_types=1);

namespace Database\Seeders;

use Domain\Auth\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        foreach (User::ROLES as $role) {
            Role::create([
                'name' => $role
            ]);
        }
    }
}
