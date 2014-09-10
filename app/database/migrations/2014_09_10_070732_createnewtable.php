<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createnewtable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create("profiles",function(Blueprint $table){
            $table->increments('id');
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('address',255);
            $table->string('email',255);
            $table->string('phone',20);
            $table->bigInteger('age');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop("profiles");
	}

}
