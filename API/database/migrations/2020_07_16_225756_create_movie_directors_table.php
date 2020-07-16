<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieDirectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_directors', function (Blueprint $table) {
            $table->increments('MDkey');
            $table->foreign('moviekey')->references('moviekey')->on('movies');
            $table->foreign('directorkey')->references('directorkey')->on('directors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_directors');
    }
}
