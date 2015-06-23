<?php

use Illuminate\Database\Seeder; 
use App\Models\GoodExtraInfo;

class GoodExtraInfosTableSeeder extends Seeder {

  public function run () 
  {
  
    DB::table('good_extra_infos')->delete();
  
    GoodExtraInfo::create([
        
      'icon_url' => '/imgs/goods/',

      'good_id' => '1',
        
      'pic_url_1' => '',
        
      'pic_url_1' => '',
        
      'pic_url_1' => '',
        
      'introduction' => '简介',

      'notice' => '',

      'ext' => '',

      'active' => 1

    ]);
  
  }

}

