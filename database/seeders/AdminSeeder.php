<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'john',
            'last_name' => 'doe',
            'role' => UserRole::Admin,
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
