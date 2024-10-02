<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make(12345678),
                'gender' => 'male',
                'role' => 'admin',
            ],
            [
                'name' => 'Artist User',
                'email' => 'artist@example.com',
                'password' => Hash::make(12345678),
                'gender' => 'male',
                'role' => 'artist',
            ],
            [
                'name' => 'Fan Worker',
                'email' => 'fans@example.com',
                'password' => Hash::make(12345678),
                'gender' => 'male',
                'role' => 'user', // Health provider role
            ],
            
        ];

        foreach ($users as $userData) {
            // Create a user record
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'gender' => $userData['gender'],
                'role' => $userData['role'],
            ]);
        }
    }
}
