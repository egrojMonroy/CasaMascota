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
           $table->datetime('date');
          // $table->time('time');
           $table->integer('tipo_res');
           $table->integer('sala_id');
           $table->foreign('user_id')->references('id')->on('users');
           $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('sala_id')->references('id')->on('rooms');
            $table->timestamps();
            $table->string('createdBy');
            $table->string('updatedBy');
            $table->softDeletes();
            $table->string('deletedBy');
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
