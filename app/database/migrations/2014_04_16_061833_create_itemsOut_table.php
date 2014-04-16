<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsOutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itemsOut', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('itemsInId');
			$table->string('status',15);
			$table->date('dop');
			$table->string('serviceCenter',100);
			$table->string('jobsheetNo',50);
			$table->string('imei',100);
			$table->integer('quantity');
			$table->float('sellingPrice');
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
		Schema::drop('itemsOut');
	}

}
