<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'email' => 'katsuhiro.k1215@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('password123'),
                'remember_token' => null,
            ],
        ]);
    }
}
