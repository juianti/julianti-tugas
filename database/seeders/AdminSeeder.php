<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


        public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@contoh.com',
            'password' => Hash::make('1234567'),  // password default
            'role' => 'admin',
        ]);
    }
    }

