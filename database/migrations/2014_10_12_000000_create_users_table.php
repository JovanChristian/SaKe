<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('id_number');
            $table->string('city');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        DB::statement("UPDATE users SET dob = DATE_FORMAT(dob, '%d-%m-%Y')");

    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
