<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs',function (Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('BlogHeader');
            $table->string('BlogBody');
            $table->string('BlogAuthor');
            $table->string('BlogThumbnail');
            $table->string('CatigoryId');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}
