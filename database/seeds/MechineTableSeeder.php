<?php

use Illuminate\Database\Seeder; 
use App\Models\Mechine;

class MechineTableSeeder extends Seeder {

  public function run () 
  {

    DB::table('mechines')->delete();  

    $customer = DB::table('customers')->first();

    $i = 100;
    
    Mechine::create([
    
        'address' => "$i, $i, $i, $i",
          
        'type' => $i/2,
    
        'uid' => $customer->id,

        'mechine_code' => '67232458555780670671FF53',
    
        'active' => 1,
        
    ]);
  

  }

}
