<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_sells', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Type')->nullable();
            $table->string('Model')->nullable();
            $table->string('Kilometer_run')->nullable();
            $table->string('Year_of_registration')->nullable();
            $table->string('Price')->nullable();
            $table->string('Fuel')->nullable();
            $table->string('Brand')->nullable();
            $table->string('Color')->nullable();
            $table->string('Image')->nullable();
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
        Schema::dropIfExists('car_sells');
    }
}
