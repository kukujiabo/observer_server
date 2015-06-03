<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechineConfigsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mechine_configs', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('mechine_id');
      $table->integer('user_id');
      $table->string('key');
      $table->integer('ip');
      $table->integer('ext_1');
      $table->string('ext_2');
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
		Schema::drop('mechine_configs');
	}

}
