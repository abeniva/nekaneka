<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->foreign()->references('id')->on('paket')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('time');
            $table->string('event');
            $table->string('start_point');
            $table->string('end_point');
            $table->string('maxpeople');
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
        Schema::drop('schedule');
    }
}
