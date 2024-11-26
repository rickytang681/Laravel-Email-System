<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    // Example data for admin table
    DB::table('authors')->insert([
        'name' => 'author',
        'email' => 'author@gmail.com',
        'password' => Hash::make('aothor123'),
        'is_editor'=> 0,
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
}

