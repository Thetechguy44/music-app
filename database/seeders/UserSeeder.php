<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
                'password' => Hash::make('12345678'),
                'gender' => 'male',
                'role' => 'admin',
            ],
            [
                'name' => 'Artist User',
                'email' => 'artist@example.com',
                'password' => Hash::make('12345678'),
                'gender' => 'male',
                'role' => 'artist',
            ],
            [
                'name' => 'Fan Worker',
                'email' => 'fans@example.com',
                'password' => Hash::make('12345678'),
                'gender' => 'male',
                'role' => 'user',
            ],
        ];

        foreach ($users as $userData) {
            // Create a user record
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'gender' => $userData['gender'],
                'role' => $userData['role'],
            ]);

            // If the role is artist, store user's ID in the artist table
            if ($userData['role'] === 'artist') {
                Artist::create([
                    'user_id' => $user->id, // Store the user's ID in the artist table
                ]);
            }
        }
    }
}
