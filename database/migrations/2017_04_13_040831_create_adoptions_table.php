<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('adoptions',function (Blueprint $table ){
            $table->integer('children');
            $table->string('type_house');
            $table->string('address');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pet_id')->references('id')->on('petss');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adoptions');
    }
}
