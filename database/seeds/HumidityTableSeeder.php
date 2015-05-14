<?php

use Illuminate\Database\Seeder; 
use App\Models\Humidity;

class HumidityTableSeeder extends Seeder {

  public function run()
  {
    DB::table('humidities')->delete();  

    for ($i = 0; $i < 10000; $i++) {
    
      Humidity::create([

          'data' => 75 + $i/9,
            
          'type_id' => 2,

          'is_normal' => 1,

          'user_id' => 1,

          'mechine_id' => 1,

          'created_at' => time() + 60 * $i
          
      ]);
    
    }
  
  }

}
