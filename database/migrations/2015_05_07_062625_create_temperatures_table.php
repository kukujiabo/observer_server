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
      $table->float('data');
      $table->integer('type_id');
      $table->integer('is_normal');
      $table->integer('user_id');
      $table->integer('mechine_id');
      $table->datetime('create_at');
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
