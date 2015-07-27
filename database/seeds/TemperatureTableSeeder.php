<?php

use Illuminate\Database\Seeder; 
use App\Models\Temperature;

class TemperatureTableSeeder extends Seeder {

  public function run()
  {
    DB::table('temperatures')->delete();  

    $customers = DB::table('customers')->first();

    $mechine = DB::table('mechines')->first();

    for ($i = 0; $i < 1000; $i++) {
    
      Temperature::create([

        'data' => 15 + $i%13,

        'seq' => md5($i),
          
        'type_id' => 2,

        'is_normal' => 1,

        'user_id' => $customers->id,

        'mechine_id' => $mechine->id,
        
        'created_at' => time() + 60 * $i

      ]);
    
    }
  
  }

}
