<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('sname');
            $table->string('fname');
            $table->string('othernames')->nullable();
            $table->string('gender');
            $table->integer('age');
            $table->string('title');
            $table->string('denomination');
            $table->string('state');
            $table->string('country');
            $table->integer('userlevel');
            $table->string('phone')->unique();
            $table->string('email')->nullable();
            $table->string('password')->unique();
            $table->string('hotel_id');
            $table->timestamp('email_verified_at')->nullable();
           
            $table->rememberToken();
            $table->timestamps();
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
};
