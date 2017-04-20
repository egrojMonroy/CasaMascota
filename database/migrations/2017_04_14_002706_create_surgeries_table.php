<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurgeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('surgeries',function (Blueprint $table ){
            $table->increments('id');
            $table->integer('pet_id');
            $table->integer('user_id');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('detail');
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
        Schema::dropIfExists('surgeries');
    }
}
