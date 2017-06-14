<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('assignations',function (Blueprint $table ){
            $table->increments('id');
            $table->integer('room_id');
            $table->integer('user_id');
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('assignations');
    }
}
