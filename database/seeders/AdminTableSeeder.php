<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // Example data for admin table
    DB::table('admins')->insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('admin123'),
        'is_super'=> 0,
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}
