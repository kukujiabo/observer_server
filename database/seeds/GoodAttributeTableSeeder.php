<?php

use Illuminate\Database\Seeder; 
use App\Models\GoodAttribute;

class GoodAttributeTableSeeder extends Seeder {

  public function run () 
  {

  ////////////////////木瓜发酵酒
  GoodAttribute::create([
    
    'good_code' => '6952549300230',

    'attr_code' => 'capacity',

    'value' => '550',

    'unit' => 'ml',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //类型
  GoodAttribute::create([
    
    'good_code' => '6952549300230',

    'attr_code' => 'type',

    'value' => '木瓜发酵酒',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //酒精含量
  GoodAttribute::create([
    
    'good_code' => '5011013100118',

    'attr_code' => 'alcohol_precentage',

    'value' => '12',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //原材料
  GoodAttribute::create([

    'good_code' => '5011013100118',

    'attr_code' => 'ingrediant',

    'value' => '鲜木瓜，纯净水，果糖，食品添加剂',

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

    'value' => '中国',

    'unit' => '',

    'ext_1' => '',
      
    'active' => 1

  ]);

  //品牌
  GoodAttribute::create([
    
    'good_code' => '5011013100118',

    'attr_code' => 'brand',

    'value' => '金立方',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低温度
  GoodAttribute::create([
    
    'good_code' => '5011013100118',

    'attr_code' => 'adapt_temperature_low',

    'value' => '5',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高温度
  GoodAttribute::create([
    
    'good_code' => '5011013100118',

    'attr_code' => 'adapt_temperature_high',

    'value' => '20',

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

  ////////////////////////奔富bin407
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'capacity',

    'value' => '750',

    'unit' => 'ml',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //类型
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'type',

    'value' => '葡萄酒',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //酒精含量
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'alcohol_precentage',

    'value' => '14.5',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //原材料
  GoodAttribute::create([

    'good_code' => '9310297001590',

    'attr_code' => 'ingrediant',

    'value' => '鲜木瓜，纯净水，果糖，食品添加剂',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //年份
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'year',

    'value' => '2014',

    'unit' => '年',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //口感
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'taste',

    'value' => '香甜',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //产地
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'origin',

    'value' => '澳大利亚',

    'unit' => '',

    'ext_1' => '',
      
    'active' => 1

  ]);

  //品牌
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'brand',

    'value' => '奔富',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低温度
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'adapt_temperature_low',

    'value' => '5',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高温度
  GoodAttribute::create([
    
    'good_code' => '5011013100118',

    'attr_code' => 'adapt_temperature_high',

    'value' => '20',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低湿度

  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'adapt_humidity_low',

    'value' => '70',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高湿度
  GoodAttribute::create([
    
    'good_code' => '9310297001590',

    'attr_code' => 'adapt_humidity_high',

    'value' => '80',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);


  ///////////////////法国骑士
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'capacity',

    'value' => '750',

    'unit' => 'ml',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //类型
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'type',

    'value' => '葡萄酒',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //酒精含量
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'alcohol_precentage',

    'value' => '13',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //原材料
  GoodAttribute::create([

    'good_code' => '3760053116604',

    'attr_code' => 'ingrediant',

    'value' => '葡萄汁',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //年份
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'year',

    'value' => '2014',

    'unit' => '年',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //口感
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'taste',

    'value' => '香甜',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //产地
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'origin',

    'value' => '法国',

    'unit' => '',

    'ext_1' => '',
      
    'active' => 1

  ]);

  //品牌
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'brand',

    'value' => '法国骑士',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低温度
  GoodAttribute::create([
    
    'good_code' => '5011013100118',

    'attr_code' => 'adapt_temperature_low',

    'value' => '5',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高温度
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'adapt_temperature_high',

    'value' => '20',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低湿度

  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'adapt_humidity_low',

    'value' => '70',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高湿度
  GoodAttribute::create([
    
    'good_code' => '3760053116604',

    'attr_code' => 'adapt_humidity_high',

    'value' => '80',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  ////////////////////////罗杰美露干红
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'capacity',

    'value' => '750',

    'unit' => 'ml',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //类型
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'type',

    'value' => '葡萄酒',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);
  
  //酒精含量
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'alcohol_precentage',

    'value' => '14.5',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //原材料
  GoodAttribute::create([

    'good_code' => '3760217672823',

    'attr_code' => 'ingrediant',

    'value' => '葡萄汁',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //年份
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'year',

    'value' => '2014',

    'unit' => '年',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //口感
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'taste',

    'value' => '香甜',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //产地
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'origin',

    'value' => '法国',

    'unit' => '',

    'ext_1' => '',
      
    'active' => 1

  ]);

  //品牌
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'brand',

    'value' => '罗杰美露',

    'unit' => '',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低温度
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'adapt_temperature_low',

    'value' => '5',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高温度
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'adapt_temperature_high',

    'value' => '20',

    'unit' => '摄氏度',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合低湿度

  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'adapt_humidity_low',

    'value' => '70',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);

  //最适合高湿度
  GoodAttribute::create([
    
    'good_code' => '3760217672823',

    'attr_code' => 'adapt_humidity_high',

    'value' => '80',

    'unit' => '%',

    'ext_1' => '',

    'active' => 1
      
  ]);


  /////////////////////////////
  




  }

}
