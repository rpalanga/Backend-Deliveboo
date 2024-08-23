<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Giuseppe',
                'email' => 'giuseppe@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Roberto',
                'email' => 'roberto@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => 'Alberto',
                'email' => 'alberto@gmail.com',
                'password' => '1234567',
            ],
            [
                'name' => 'Simone',
                'email' => 'simone@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Alex',
                'email' => 'alex@gmail.com',
                'password' => '123456789',
            ]
        ];

        foreach($users as $user) {

            $newUser = new User();

            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = Hash::make($user['password']);
            
            $newUser->save();
        }
    }
}
