<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('employee_id');
            $table->string('employee_name', 255);
            $table->string('cpf', 11);
            $table->tinyInteger('gender');
            $table->integer('salary');
            $table->integer('rental_id')->unsigned();
        });

        Schema::table('employees', function(Blueprint $table) {
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
        Schema::dropIfExists('employees');
    }
}
