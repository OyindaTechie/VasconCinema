<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cinema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ['id', 'cinema_name', 'location', 'email', 'password'];

        Schema::create('cinemas', function (Blueprint $table) {
            $table->string('id');
            $table->timestamps();
            $table->string('cinema_name');
            $table->string('location');
            $table->string('email');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
