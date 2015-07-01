<?php

use Illuminate\Database\Seeder; 
use App\Models\Goods;

class GoodTableSeeder extends Seeder {

  public function run () 
  {
  
    //DB::table('goods')->delete();

    $array = array (
    
      "6952549300230" => "奔富 Bin407",
    
      "9310297001590" => "卡拉尔赤霞珠",

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
