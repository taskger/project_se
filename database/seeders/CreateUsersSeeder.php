<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Contact;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'profile_image' => '1680628623.png',
                'name' => 'User',
                'surname' => 'suruser',
                'telephone' => '123',
                'email' => 'user@user.com',
                'password' => 'user',
            ],
            [
                'profile_image' => '1680628623.png',
                'name' => 'Admin',
                'surname' => 'suradmin',
                'telephone' => '1231231231',
                'role' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '1234',
            ],
            [
                'profile_image' => '1680628623.png',
                'name' => 'employee',
                'surname' => 'suremployee',
                'telephone' => '123',
                'role' => 'employee',
                'email' => 'employee@employee.com',
                'password' => 'employee',
            ],
        ];
        $contact = [
            [
                'id' => '1',
                'prefix' => 'test',
                'firstname' => 'test',
                'lastname' => 'surtest',
                'phone' => '1',
                'email' => 'a',
                'birthday' => 'test',
                'identification' => 'test',
                'status' => 'test',
                'career' => 'test',
                'address' => 'test',
                'road' => 'test',
                'province' => 'test',
                'amphoe' => 'test',
                'tambon' => 'test',
                'input_zipcode' => 'test',
                'coverstartdate' => 'test',
                'brand' => 'test',
                'carmodel' => 'test',
                'caryear' => 'test',
                'registrationnumber' => 'test',
                'registrationprovince' => 'test',
                'chassisnumber' => 'test',
                'carpaint' => 'test',
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
        foreach($contact as $key => $value){
            Contact::create($value);
        }
    }
}
