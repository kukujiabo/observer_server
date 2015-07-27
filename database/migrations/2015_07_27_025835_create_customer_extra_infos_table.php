<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerExtraInfosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_extra_infos', function(Blueprint $table)
		{
			$table->increments('id');
      $table->string('phone');
      $table->string('pic_url');
      $table->string('ext_0')->nullable();
      $table->text('ext_1')->nullable();
      $table->text('ext_2')->nullable();
      $table->integer('customer_id');
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
		Schema::drop('customer_extra_infos');
	}

}
