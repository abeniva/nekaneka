<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_foto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->foreign()->references('id')->on('paket')->onDelete('cascade');
            $table->string('image');
            $table->string('original_name');
            $table->string('original_imagetype');
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
        Schema::drop('paket_foto');
    }
}
