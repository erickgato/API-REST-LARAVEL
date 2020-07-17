<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('moviekey');
            $table->date('launchday');
            $table->string('nationality');
            $table->string('description');
            $table->string('duration');
            $table->unsignedInteger('catekey')->nullable();
           
        });
        Schema::table('movies', function (Blueprint $table) {
            $table->foreign('catekey')->references('clasifykey')->on('classifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
