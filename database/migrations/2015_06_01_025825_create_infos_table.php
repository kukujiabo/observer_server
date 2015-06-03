<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('infos', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('type');
      $table->string('title');
      $table->text('content');
      $table->integer('ext_id');
      $table->string('ext_s');
      $table->text('ext_t');
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
		Schema::drop('infos');
	}

}
