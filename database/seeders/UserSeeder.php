<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('test@example.com'),
        ]);
        \App\Models\User::create([
            'name' => '1 User',
            'email' => 'test1@example.com',
            'password' => Hash::make('test@example.com'),
        ]);
        \App\Models\User::create([
            'name' => 'Testqe User',
            'email' => 'test2@example.com',
            'password' => Hash::make('dommel')
        ]);
    }
}
