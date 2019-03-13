<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('product_id');
            $table->bigInteger('owner_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('rec_phone');
            $table->string('rec_email');
            $table->string('rec_address');
            $table->string('rec_city');
            $table->boolean('pending');
            $table->boolean('approved');
            $table->boolean('returned');
            $table->boolean('declined');
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
