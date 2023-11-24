<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CatDepartamentos extends Migration
{
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->mediumIncrements('id')->unsigned();
            $table->text('descripcion');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
