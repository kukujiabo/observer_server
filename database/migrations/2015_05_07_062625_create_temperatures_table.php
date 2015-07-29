<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemperaturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temperatures', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('seq');
      $table->float('data');
      $table->integer('type_id')->nullable();
      $table->integer('is_normal')->nullable();
      $table->integer('user_id');
      $table->integer('mechine_id');
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
		Schema::drop('temperatures');
	}

}
