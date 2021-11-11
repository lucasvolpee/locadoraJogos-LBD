<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('adress_id');
            $table->string('neighborhood');
            $table->string('street');
            $table->string('number');
            $table->integer('rental_id')->unsigned();
        });

        Schema::table('adresses', function(Blueprint $table) {
            $table->foreign('rental_id')->references('rental_id')->on('rentals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
