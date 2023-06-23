<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('alternative_phone_no')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->nullable();
            $table->string('date')->nullable();
            $table->string('car_name')->nullable();
            $table->string('address')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
