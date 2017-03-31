<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('verif_stat');
            $table->string('email')->unique();
            $table->string('username');
            $table->string('password', 60);
            $table->string('fullname');
            $table->text('address');
            $table->string('city');
            $table->string('province');
            $table->string('gender');                     
            $table->date('tanggallahir');
            $table->string('bahasa');
            $table->string('foto');
            $table->string('multidokumen');
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
        Schema::drop('agents');
    }
}
