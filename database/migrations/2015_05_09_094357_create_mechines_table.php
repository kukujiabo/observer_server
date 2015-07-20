<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMechinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mechines', function(Blueprint $table)
		{
			$table->increments('id');
      $table->text('address');
      $table->integer('type');
      $table->integer('uid');
      $table->integer('active');
      $table->string('mechine_code');
			$table->timestamps();
      $table->unique('mechine_code');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mechines');
	}

}
