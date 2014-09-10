<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createtablecomments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create("comments",function(Blueprint $table){
            $table->increments('id');
            $table->integer('news_id');
            $table->text('comment');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema::drop("comments");
	}

}