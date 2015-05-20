<?php

use Illuminate\Database\Seeder; 
use App\Models\Humidity;

class HumidityTableSeeder extends Seeder {

  public function run()
  {
    DB::table('humidities')->delete();  

    $user = DB::table('users')->first();

    $mechine = DB::table('mechines')->where('type', '=', '1')->first();

    for ($i = 0; $i < 10000; $i++) {
    
      Humidity::create([

          'data' => 75 + $i%9,
            
          'type_id' => 2,

          'is_normal' => 1,

          'user_id' => $user->id,

          'mechine_id' => $mechine->id,

          'created_at' => time() + 60 * $i
          
      ]);
    
    }
  
  }

}
