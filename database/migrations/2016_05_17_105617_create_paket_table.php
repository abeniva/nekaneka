<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agents_id')->foreign()->references('id')->on('agents')->onDelete('cascade');
            $table->text('judul');
            $table->text('description');
            $table->string('multipic');
            $table->integer('price');
            $table->string('tag');
            $table->text('detail');
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
        Schema::drop('paket');
    }
}
