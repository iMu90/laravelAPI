<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * creating foods table
         * this will include:
         *    - id: unique id for the added food
         *    - menu id: unique ID for the menu that the food goes under
         *    - user id: cooker who created the new food
         *    - name: food name
         *    - description: free space for the cooker to describe the food
         *    - price: food's price (only 3 digits is accepted, means max is: 999)
         *    - rate: avarage rate for the food (rated by other users)
         *    - timestaps(): when the food created
         *    - image: cooker will be able to upload an image of the food
         */

        Schema::create('foods', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('menuID')->unsigned();
            $table->foreign('menuID')->references('id')->on('menus')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 3, 2);
            $table->integer('rate');

        });

//        Schema::table('foods', function (Blueprint $table){
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
        Schema::dropIfExists('foods');
    }
}
