<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountTable extends Migration
{
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            
            $table->string('username')->unique();
            $table->string('email',100)->unique();
            $table->string('password');
            // Add other columns as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_accounts');
    }
}