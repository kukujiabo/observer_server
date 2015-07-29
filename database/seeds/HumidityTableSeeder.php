<?php

use Illuminate\Database\Seeder; 
use App\Models\Humidity;

class HumidityTableSeeder extends Seeder {

  public function run()
  {
    DB::table('humidities')->delete();  

    $customer = DB::table('customers')->first();

    $mechine = DB::table('mechines')->first();

    for ($i = 0; $i < 1000; $i++) {
    
      Humidity::create([

          'data' => 75 + $i%9,

          'seq' => md5($i),
            
          'type_id' => 2,

          'is_normal' => 1,

          'user_id' => $customer->id,

          'mechine_id' => $mechine->id,

          'created_at' => time() + 60 * $i
          
      ]);
    
    }
  
  }

}
