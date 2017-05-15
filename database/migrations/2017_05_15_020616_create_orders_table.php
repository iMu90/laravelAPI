<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * creating orders table
         * this will include:
         *    - id: unique ID for the order
         *    - userID: the ID for the user who made an orderd
         *    - foodID: the food unique id
         *    - cookerID: the ID for the cooker of the food
         *    - item: number of items specified by the user
         *    - timestaps(): when the order created
         */

        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('userID')->unsigned();
            $table->integer('foodID')->unsigned();
            $table->integer('cookerID')->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('foodID')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('cookerID')->references('id')->on('users')->onDelete('cascade');
            $table->integer('items');
            $table->timestamps();
        });

//        Schema::table('orders', function (Blueprint $table){
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
        Schema::dropIfExists('orders');
    }
}
