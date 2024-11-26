<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class UserAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // Example data for user_account table
    DB::table('users')->insert([
        'username' => 'user1',
        'email' => 'user1@example.com',
        'password' => Hash::make('password1'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('users')->insert([
        'username' => 'user2',
        'email' => 'user2@example.com',
        'password' => Hash::make('password2'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}
