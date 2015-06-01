<?php

use Illuminate\Database\Seeder; 
use App\Models\Info;

class InfoTableSeeder extends Seeder {

  public function run ()
  {
  
    DB::table('infos')->delete();

    Info::create([
        
      'type' => 1,

      'title' => 'about',

      'content' => '我们是...',

      'ext_id' => 0,

      'ext_s' => '',

      'ext_t' => ''
        
    ]);
  
  }

}
