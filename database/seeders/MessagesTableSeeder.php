<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'id' => 2,
            'header' => 'Sample Message',
            'sender_email'=> 'ali@gmail.com',
            'recipient_email'=>'user1@example.com',
            'content' => 'This is a sample message content.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
