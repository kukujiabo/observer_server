<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserConfigSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_config_settings', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('user_id');
      $table->integer('setting_id');
      $table->string('setting_value');
      $table->integer('active');
      $table->string('comment');
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
		Schema::drop('user_config_settings');
	}

}
