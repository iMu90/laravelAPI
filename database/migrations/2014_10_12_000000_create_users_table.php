<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * creating users table
         * this will include:
         *    - user id: unique ID for a user
         *    - fname: user first name
         *    - lname: user last name
         *    - email: user email (must be unique)
         *    - timestaps(): time when the user joins
         *    - isCooker: boolean value to indicate whether the user is cooker or regular user
         *    - city: stated where the user is from (not required for regular user)
         *    - state: (not required for regular user
         *    - cellphone: user phone number
         *    - rate: an avg rate for user/cooker (rated by other) // only allowed to rate if the user and cooker are added to the order table
         */

        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isCooker');
            $table->string('city');
            $table->string('state');
            $table->integer('cellphone');
            $table->integer('rate');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
