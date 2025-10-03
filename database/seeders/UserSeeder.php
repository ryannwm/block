<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        User::create([
            'userType' => $faker->randomElement(['admin', 'user']),
            'userName' => $faker->name(),
            'userEmail' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'userPassword' => Hash::make('password'), 
            'remember_token' => Str::random(10),
        ]);
    }
}
