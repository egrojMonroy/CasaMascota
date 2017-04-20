<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('facture',function (Blueprint $table ){
            $table->increments('id');
            $table->integer('auth');
            $table->integer('id_salon');
            $table->foreign('id_salon')->references('id')->on('salons');
            $table->integer('id_user_nit');
            $table->integer('id_clinic_record');
            $table->foreign('id_clinic_record')->references('id')->on('clinic_records');
            $table->foreign('id_user_nit')->references(id)->on('user_nit');
            $table->double('total');
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
        Schema::dropIfExists('facture');
    }
}
