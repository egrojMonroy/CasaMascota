<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('rooms',function (Blueprint $table){
        $table->increments('id');
        $table->string('name');
        $table->smallInteger('type_room_id');
        $table->integer('number');
        $table->string('franja');
        $table->foreign('type_room_id')->references('id')->on('type_rooms');
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
        Schema::dropIfExists('rooms');
    }
}
