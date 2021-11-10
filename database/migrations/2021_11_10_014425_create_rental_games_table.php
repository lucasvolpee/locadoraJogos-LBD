<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rental_id')->unsigned();
            $table->integer('game_id')->unsigned();
        });

        Schema::table('rental_games', function(Blueprint $table) {
            $table->foreign('rental_id')->references('rental_id')->on('rentals')->onDelete('cascade');
            $table->foreign('game_id')->references('game_id')->on('games')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_games');
    }
}
