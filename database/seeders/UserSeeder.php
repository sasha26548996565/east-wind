<?php

declare(strict_types=1);

namespace Database\Seeders;

use Carbon\Carbon;
use Domain\Auth\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    private array $users;
    private array $admins;

    public function __construct()
    {
        $this->users = [
            [
                'name' => 'tester',
                'email' => 'tester1@gmail.com',
                'password' => Hash::make('tester1'),
                'email_verified_at' => Carbon::now(),
                'available_messages' => 20
            ],
            [
                'name' => 'tester',
                'email' => 'tester2@gmail.com',
                'password' => Hash::make('tester2'),
                'email_verified_at' => Carbon::now(),
                'available_messages' => 20
            ],
            [
                'name' => 'tester',
                'email' => 'tester3@gmail.com',
                'password' => Hash::make('tester3'),
                'email_verified_at' => Carbon::now(),
                'available_messages' => 20
            ]
        ];

        $this->admins = [
            [
                'name' => 'admin',
                'email' => 'sashapozhidaev07@gmail.com',
                'password' => Hash::make('r00tr00t'),
                'email_verified_at' => Carbon::now(),
                'available_messages' => 10 ** 6
            ]
        ];
    }

    public function run(): void
    {   
        $this->addUser($this->users, 'user');
        $this->addUser($this->admins, 'admin');
    }

    private function addUser(array $users, string $role): void
    {
        $role = Role::where('name', $role)->first();
        
        foreach ($users as $list) {
            $user = User::create($list);
            $user->assignRole($role->id);
        }
    }
}
