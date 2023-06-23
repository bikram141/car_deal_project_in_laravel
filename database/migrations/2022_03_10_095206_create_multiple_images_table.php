<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultipleImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multiple_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_sells_id')->nullable();
            $table->foreign('car_sells_id')->references('id')->on('car_sells')->onDelete('cascade');
            $table->string('images');
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
        Schema::dropIfExists('multiple_images');
    }
}
