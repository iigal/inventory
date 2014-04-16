<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsInTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itemsIn', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('spareId');
			$table->integer('modelId');
			$table->integer('providerId');
			$table->integer('quantity');
			$table->float('costPrice');
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
		Schema::drop('itemsIn');
	}

}
