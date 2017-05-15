<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacDisTable extends Migration
{
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('vac_dis',function (Blueprint $table ){
            $table->increments('id');
            $table->integer('vac_id');
            $table->integer('dis_id');
            $table->foreign('dis_id')->references('id')->on('diseases');
            $table->foreign('vac_id')->references('id')->on('vaccines');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('vac_dis');
    }
}
