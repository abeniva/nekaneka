<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->foreign()->references('id')->on('paket')->onDelete('cascade');
            $table->integer('customer_id')->foreign()->references('id')->on('customer')->onDelete('cascade');
            $table->integer('schedule_id')->foreign()->references('id')->on('schedule')->onDelete('cascade');
            $table->date('date');
            $table->text('detail');
            $table->boolean('payment_stat');
            $table->rememberToken();
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
        Schema::drop('booking');
    }
}
