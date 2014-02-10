<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriversTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('pin');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('phone');
			$table->string('photo');
			$table->float('position_lat');
			$table->float('position_lng');
			$table->integer('vehicle_id');
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
		Schema::drop('drivers');
	}

}
