<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Catigories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('catigories',function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('catigoryName');
            $table->string('catigoryBlogsNum'); 
            $table->string('catigroyColor');
        });








    }
   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('catigories');
    }
}
