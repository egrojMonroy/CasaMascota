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
        Schema::create('salons',function (Blueprint $table ){
            $table->increments('id');
            $table->timestamp('date');
            $table->text('observation');
            $table->integer('user_id');
            $table->integer('pet_id');
            $table->integer('type_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pet_id')->references('id')->on('pets');
            $table->foreign('type_id')->references('id')->on('type_salons');
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
        Schema::dropIfExists('salons');
    }
}
