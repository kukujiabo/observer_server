<?php

use Illuminate\Database\Seeder; 
use App\Models\Goods;

class GoodTableSeeder extends Seeder {

  public function run () 
  {
  
    DB::table('goods')->delete();

    $array = array (
    
      "5011013100118" => "Bailey's"
    
    );
  
    foreach ($array as $key => $value) {

      Goods::create([

        'code' => $key,

        'name' => $value,

        'intro' => '百利甜酒',

        'ext_1' => '',

        'ext_2' => ''
    
      ]);

    }
  
  }

}
