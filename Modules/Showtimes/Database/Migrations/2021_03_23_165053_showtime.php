<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Showtime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
        Schema::create('showtimes', function (Blueprint $table)  {
            $table->string('id');
            $table->timestamps();
            $table->string('movie_id')->nullable();
            $table->string('showtime');
            $table->date('showdate');
          
            $table->string('cinema_id')->nullable();
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
