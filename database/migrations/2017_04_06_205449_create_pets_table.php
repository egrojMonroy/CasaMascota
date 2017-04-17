<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration{

    public function up()    {
        Schema::defaultStringLength(191);
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->float('weight');
            $table->float('height');
            $table->date('age');
            $table->string('urlImg');
            $table->binary('gender');
            $table->integer('breed_id');
            $table->integer('user_id');
            $table->foreign('breed_id')->references('id')->on('breeds');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('in_adoption');
            $table->timestamps();
        });
    }

    public function down()    {
        Schema::dropIfExists('pets');
    }
}