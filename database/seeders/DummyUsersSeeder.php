<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    public function run()
    {
        $userData = [
            [
               'name' => 'Admin',
               'email' => 'admin@gmail.com',
               'is_admin' => '1',
               'password' => bcrypt('123456789'),
            ],
            [
               'name' => 'User',
               'email' => 'user@gmail.com',
               'is_admin' => '0',
               'password' => bcrypt('123456789'),
            ],
        ];

        foreach ($userData as $val) {
            User::create($val);
        }
    }
}
