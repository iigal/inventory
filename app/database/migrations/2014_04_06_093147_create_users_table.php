<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//This is for creating the user table
		Schema::create('users', function($t) {
			$t->increments('id');
			$t->string('username', 16);
			$t->string('password', 64);
			$t->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//roll back code for above
		Schema::drop('users');
	}

}
