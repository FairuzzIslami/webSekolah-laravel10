<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' =>'ahmad',
            'email' => 'ahmad@gmail.com',
            'password' => \bcrypt('ahmad123')
        ];

        User::insert($user);
    }
}
