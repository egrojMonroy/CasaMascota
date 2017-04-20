<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetVacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('pet_vac',function (Blueprint $table ){
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('vac_id');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('vac_id')->references('id')->on('vaccines');
            $table->timestamp('date');
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
        Schema::dropIfExists('pet_vac');
    }
}
