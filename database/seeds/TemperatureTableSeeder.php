<?php

use Illuminate\Database\Seeder; 
use App\Models\Temperature;

class TemperatureTableSeeder extends Seeder {

  public function run()
  {
    DB::table('temperatures')->delete();  

    $user = DB('users')->first();

    for ($i = 0; $i < 1000; $i++) {
    
      Temperature::create([

          'data' => 15 + $i/13,
            
          'type_id' => 2,

          'is_normal' => 1,

          'user_id' => 1,

          'mechine_id' => 2,
          
          'created_at' => time() + 60 * $i
      ]);
    
    }
  
  }

}
