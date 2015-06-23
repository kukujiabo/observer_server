<?php

use Illuminate\Database\Seeder; 
use App\Models\Attributes;

class AttributesTableSeeder extends Seeder {

  public function run () 
  {
  
    DB::table('attributes')->delete();

    $insertArray = array(
    
      'capacity' => '容量',

      'type' => '类型',

      'alcohol_percentage' => '酒精含量',

      'ingredient' => '原料',

      'grape_type' => '葡萄品种',

      'year' => '年份',

      'taste' => '口感',

      'origin' => '产地',

      'brand' => '品牌',
    
      'adapt_temperature_low' => '最适低温度',

      'adapt_temperature_high' => '最适高温度',

      'adapt_humidity_low' => '最适低湿度',

      'adapt_humidity_high' => '最适合高湿度'
    
    );

    foreach ($insertArray as $key => $value) {
    
      Attributes::create([
          
          'aname' => $value,

          'active' => 1,

          'intro' => '',

          'ext_1' => '',
          
          'acode' => $key
          
      ]);
    
    }
  
  }

}
