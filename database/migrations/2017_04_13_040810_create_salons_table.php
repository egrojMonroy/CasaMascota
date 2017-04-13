<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('salon',function (Blueprint $table ){
            $table->timestamp('date');
            $table->text('observation');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pet_id')->references('id')->on('pets');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salons');
    }
}
