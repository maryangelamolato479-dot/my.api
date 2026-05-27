<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // We removed the SET FOREIGN_KEY_CHECKS lines because they broke SQLite.
        // We also removed truncate() because migrate:fresh handles that for you!

        User::create([
            'name'     => 'Amolato',
            'email'    => 'amolato@gmail.com',
            'password' => Hash::make('amolato123'),
            'gender'   => 'female', 
        ]);
    }
}