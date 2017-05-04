<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url',200);
            $table->integer('word_id')->unsigned();
            $table->integer('region_id')->unsigned();
            $table->integer('state_id')->unsigned()->default(1);
            $table->integer('user_id')->unsigned();

            $table->foreign('word_id')->references('id')->on('words')->onDelete('cascade');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
