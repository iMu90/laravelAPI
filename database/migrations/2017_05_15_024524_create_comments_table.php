<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * creating comments table
         * this will include:
         *    - id: unique ID for the comment
         *    - user id: unique id of the user who wrote the comment
         *    - foodID: the food that been commented
         *    - rate: user rate for the food
         *    - body: the comment
         *    - timestaps(): when the comment is created
         */
        Schema::create('comments', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('userID')->unsigned();
            $table->integer('foodID')->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('foodID')->references('id')->on('foods')->onDelete('cascade');
            $table->text('body');
            $table->integer('rate');

            $table->timestamps();
        });
//
//        Schema::table('comments', function (Blueprint $table){
//            $table->engine = 'InnoDB';
//
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
