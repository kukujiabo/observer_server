<?php

use Illuminate\Database\Seeder; 
use App\Models\GoodExtraInfo;
use App\Models\Goods;

class GoodExtraInfosTableSeeder extends Seeder {

  public function run () 
  {
  
    DB::table('good_extra_infos')->delete();
  
    $goods = Goods::all();
  
    foreach ($goods as $good) {
    
      GoodExtraInfo::create([
        
        'icon_url' => '/imgs/test_goods/' . $good->code . '.jpg',

        'good_id' => $good->id,
        
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

}

