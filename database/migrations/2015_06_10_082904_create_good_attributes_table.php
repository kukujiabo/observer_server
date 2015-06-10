<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('good_attributes', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('g_id');
      $table->integer('a_id');
      $table->string('value');
      $table->string('st');
      $table->integer('active');
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
		Schema::drop('good_attributes');
	}

}
