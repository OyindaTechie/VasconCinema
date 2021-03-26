<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Movie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
        Schema::create('movies', function (Blueprint $table) {
            $table->string('id');
            $table->timestamps();
            $table->string('movie_title');
            $table->string('movie_img_url')->nullable();
            $table->string('showtime_id')->nullable();
            $table->string('cinema_id');
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
