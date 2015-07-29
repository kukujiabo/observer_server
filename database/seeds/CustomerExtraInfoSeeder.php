<?php

use App\Models\CustomerExtraInfo;
use Illuminate\Database\Seeder; 
use App\Models\Customer;

class CustomerExtraInfoSeeder extends Seeder {

  public function run()
  {
  
    DB::table('customer_extra_infos')->delete();

    $customer = Customer::first();

    CustomerExtraInfo::create([
    
      'phone' => '13928109293',

      'pic_url' => 'pic/' + $customer->id + '/12390.png',

      'customer_id' => $customer->id
    
    ]);
  
  }

}
