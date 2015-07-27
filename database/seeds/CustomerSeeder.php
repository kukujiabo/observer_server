<?php

use App\Models\Customer;
use Illuminate\Database\Seeder; 

class CustomerSeeder extends Seeder {

  public function run () 
  {

     DB::table('customers')->delete();

     Customer::create([
         
         'name' => 'testuser1',

         'password' => md5(123),

         'email' => 'mymail@163.com'
         
     ]);
  
  
  }

}
