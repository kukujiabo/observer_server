<?php

use Illuminate\Database\Seeder; 
use App\Models\Mechine;

class MechineTableSeeder extends Seeder {

  public function run () {

    DB::table('mechines')->delete();  

    $user = DB::table('users')->first();
    
    for ($i = 0; $i < 20; $i++) {
    
      Mechine::create([
    
          'address' => "$i, $i, $i, $i",
            
          'type' => $i/2,
    
          'uid' => $user->id,
    
          'active' => 1,
          
      ]);
  
    }

  }

}
