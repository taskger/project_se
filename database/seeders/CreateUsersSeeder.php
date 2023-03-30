<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'User',
                'surname' => 'suruser',
                'telephone' => '123',
                'email' => 'user@user.com',
                'password' => 'user',
            ],
            [
                'name' => 'Admin',
                'surname' => 'suradmin',
                'telephone' => '1231231231',
                'role' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '1234',
            ],
            [
                'name' => 'employee',
                'surname' => 'suremployee',
                'telephone' => '123',
                'role' => 'employee',
                'email' => 'employee@employee.com',
                'password' => 'employee',
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}
