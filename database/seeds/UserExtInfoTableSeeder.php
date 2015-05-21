<?php

use Illuminate\Database\Seeder; 
use App\Models\UserExtInfo;

class UserExtInfoTableSeeder extends Seeder {

  public function run () {

    DB::table('user_ext_infos')->delete();

    $user = DB::table('users')->first();
  
    UserExtInfo::create([
        
      'phone' => '13920192830',

      'pic_url' => 'pic/' + $user->id + '/' + '12390.png',

      'user_id' => $user->id
        
    ]);
  
  }

}
