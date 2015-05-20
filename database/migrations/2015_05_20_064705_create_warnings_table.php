<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('warnings', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('user_id');
      $table->integer('mechine_id');
      $table->integer('d_id');
      $table->integer('w_data');
      $table->integer('n_data');
      $table->integer('up_down');
      $table->integer('type');
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
		Schema::drop('warnings');
	}

}
