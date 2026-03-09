<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => 'Pixotera Admin',
                'email' => 'admin@pixotera.com',
                'password' => Hash::make('1L9r1&p76n_S'), // Asla düz metin saklamıyoruz!
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];


        User::insert($users);
    }
}
