<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodExtraInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('good_extra_infos', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('good_id');
      $table->string('icon_url')->nullable();
      $table->string('pic_url_1')->nullable();
      $table->string('pic_url_2')->nullable();
      $table->string('pic_url_3')->nullable();
      $table->text('introduction')->nullable();
      $table->string('notice')->nullable();
      $table->integer('active');
      $table->string('ext');
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
		Schema::drop('good_extra_infos');
	}

}
