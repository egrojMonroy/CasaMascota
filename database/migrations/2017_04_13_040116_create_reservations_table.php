<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations',function (Blueprint $table){
           $table->increments('id');
           $table->integer('user_id');
           $table->integer('pet_id');
           $table->date('date');
           $table->time('time');
           $table->string('tipo_res');
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('pet_id')->references('id')->on('pets');
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
        Schema::dropIfExists('reservations');
    }
}
