<?php

use Illuminate\Database\Seeder; 
use App\Models\Temperature;

class TemperatureTableSeeder extends Seeder {

  public function run()
  {
    DB::table('temperatures')->delete();  

    for ($i = 0; $i < 10000; $i++) {
    
      Temperature::create([

          'data' => 15 + $i/13,
            
          'type_id' => 2,

          'is_normal' => 1,

          'user_id' => $i/7,

          'mechine_id' => $i/10,

          'create_at' => time() + 30 * $i
          
      ]);
    
    }
  
  }

}
