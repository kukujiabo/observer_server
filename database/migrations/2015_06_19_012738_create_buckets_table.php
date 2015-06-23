<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBucketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('buckets', function(Blueprint $table)
		{
			$table->increments('id');
      $table->integer('user_id');
      $table->integer('good_id');
      $table->integer('active');
      $table->string('nick_name');
      $table->string('comment');
      $table->string('ext_1');
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
		Schema::drop('buckets');
	}

}
