<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*
         * creating menu table
         * this will include:
         *    - menu id: unique ID for the menu
         *    - user id: cooker who created the menu
         *    - timestaps(): when the menu created
         *    - menuName: menu's name/type
         *    - description: free space for the cooker to describe the menu
         */

        Schema::create('menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamps();
            $table->integer('userID')->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->string('menuName');
            $table->text('description');
        });

//        Schema::table('menus', function (Blueprint $table){
//            $table->engine = 'InnoDB';
//            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
