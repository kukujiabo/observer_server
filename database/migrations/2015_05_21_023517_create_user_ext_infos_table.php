<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserExtInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_ext_infos', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('phone');
      $table->string('pic_url');
      $table->string('ext_0');
      $table->text('ext_1');
      $table->text('ext_2');
      $table->integer('user_id');
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
		Schema::drop('user_ext_infos');
	}

}
