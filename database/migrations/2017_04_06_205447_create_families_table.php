<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration{

    public function up(){
        Schema::create('families', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name', 45);
            $table->enum('name',['canino', 'felino']);
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('families');
    }
}
