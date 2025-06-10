<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Иван', 'email' => 'ivan1@example.com', 'password' => Hash::make('secret')],
            ['name' => 'Анна', 'email' => 'anna@example.com', 'password' => Hash::make('secret')],
            ['name' => 'Петр', 'email' => 'petr@example.com', 'password' => Hash::make('secret')],
            ['name' => 'Ольга', 'email' => 'olga@example.com', 'password' => Hash::make('secret')],
            ['name' => 'Максим', 'email' => 'maks@example.com', 'password' => Hash::make('secret')],
        ]);
    }
}
