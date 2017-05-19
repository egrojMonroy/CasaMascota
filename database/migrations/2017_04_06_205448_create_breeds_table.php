<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration{

    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 45);
            $table->integer('family_id');
            $table->foreign('family_id')->references('id')->on('families');
            $table->timestamps();
            $table->string('createdBy');
            $table->string('updatedBy');
            $table->softDeletes();
            $table->string('deletedBy');
        });
    }

    public function down(){
        Schema::dropIfExists('breeds');
    }
}
