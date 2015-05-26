<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalasysLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('analasys_logs', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('user_id');
      $table->integer('mid');
      $table->string('title');
      $table->text('content');
      $table->integer('type');
      $table->string('ext_1');
      $table->integer('ext_2');
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
		Schema::drop('analasys_logs');
	}

}
