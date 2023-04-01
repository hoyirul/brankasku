<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Mochammad Hairullah',
                'email' => 'madhai@example.com',
                'password' => 'password'
            ],
            [
                'name' => 'Elvira Sania Mufida',
                'email' => 'elsa@example.com',
                'password' => 'password'
            ]
        ];

        foreach($data as $row){
            User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'password' => Hash::make($row['password'])
            ]);
        }
    }
}
