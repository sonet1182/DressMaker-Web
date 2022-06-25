<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Designer One',
            'email' => 'designer1@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'seller',
        ]);

        User::create([
            'name' => 'Employer One',
            'email' => 'employer1@gmail.com',
            'password' => Hash::make('12345'),
            'role' => 'buyer',
        ]);
    }
}
