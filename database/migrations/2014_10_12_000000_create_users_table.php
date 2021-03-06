<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->text('about')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('reference')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('specialty_id')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->enum('type',['student','specialist','manager'])->default('student');
            $table->enum('status', ['online', 'confirmed', 'pending', 'offline'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
