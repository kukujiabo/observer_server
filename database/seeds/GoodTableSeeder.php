<?php

use Illuminate\Database\Seeder; 
use App\Models\Goods;

class GoodTableSeeder extends Seeder {

  public function run () 
  {
  
    DB::table('goods')->delete();

    $array = array (

      "5011013100118" => "Bailey's",

      "6952549300230" => "金立方古南冰谷酒",
    
      "9310297001590" => "奔富 Bin407",
    
      "9343339001005" => "卡拉尔赤霞珠",

      "3760053116604" => "法国骑士1828",

      "3760217672823" => "罗杰美露干红"

    );

    foreach ($array as $key => $value) {

      Goods::create([

        'code' => $key,

        'name' => $value,

        'intro' => '简介：这是酒',

        'ext_1' => '',

        'ext_2' => ''
    
      ]);

    }
  
  }

}
