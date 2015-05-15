<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

    $this->call('HumidityTableSeeder');

    $this->call('TemperatureTableSeeder');

    $this->call('UserSeeder');

    $this->call('MechineTableSeeder');

    //$this->call('UserSettingTableSeeder');
    
    $this->call('UserConfigSettingTableSeeder');

	}

}
