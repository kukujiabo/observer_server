<?php

use Illuminate\Database\Seeder; 
use App\Models\GoodAttribute;

class GoodAttributeTableSeeder extends Seeder {

  public function run () 
  {
    DB::table('good_attributes')->delete();

    //容量
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'capacity',

      'value' => '1000',

      'unit' => 'ml',

      'ext_1' => '',

      'active' => 1
        
    ]);
  
    //类型
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'type',

      'value' => '甜酒',

      'unit' => '',

      'ext_1' => '',

      'active' => 1
        
    ]);
    
    //酒精含量
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'alcohol_precentage',

      'value' => '17',

      'unit' => '%',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //原材料
    GoodAttribute::create([

      'good_code' => '5011013100118',

      'attr_code' => 'ingrediant',

      'value' => '奶油，白砂糖，酒精，麦芽糊精，人工乳',

      'unit' => '',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //年份
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'year',

      'value' => '2015',

      'unit' => '年',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //口感
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'taste',

      'value' => '香甜',

      'unit' => '',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //产地
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'origin',

      'value' => '爱尔兰',

      'unit' => '',

      'ext_1' => '',
        
      'active' => 1

    ]);

    //品牌
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'brand',

      'value' => '百利甜酒',

      'unit' => '',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //最适合低温度
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'adapt_temperature_low',

      'value' => '25',

      'unit' => '摄氏度',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //最适合高温度
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'adapt_temperature_high',

      'value' => '32',

      'unit' => '摄氏度',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //最适合低湿度

    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'adapt_humidity_low',

      'value' => '70',

      'unit' => '%',

      'ext_1' => '',

      'active' => 1
        
    ]);

    //最适合高湿度
    GoodAttribute::create([
      
      'good_code' => '5011013100118',

      'attr_code' => 'adapt_humidity_high',

      'value' => '80',

      'unit' => '%',

      'ext_1' => '',

      'active' => 1
        
    ]);
  }

}
