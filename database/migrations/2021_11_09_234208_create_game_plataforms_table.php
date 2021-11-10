<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamePlataformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_plataforms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game_id')->unsigned();
            $table->integer('plataform_id')->unsigned();
        });

        Schema::table('game_plataforms', function(Blueprint $table) {
            $table->foreign('game_id')->references('game_id')->on('games')->onDelete('cascade');
            $table->foreign('plataform_id')->references('plataform_id')->on('plataforms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_plataforms');
    }
}
