<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerCrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_cr',function (Blueprint $table ){
            $table->increments('id');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('cr_id')->references('id')->on('clinic_records');
            $table->timestamp('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_cr');
    }
}
