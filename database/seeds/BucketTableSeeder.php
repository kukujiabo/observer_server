<?php

use Illuminate\Database\Seeder; 
use App\Models\Bucket;
use App\User;
use App\Models\Goods;
use App\Models\GoodExtraInfo;

class BucketTableSeeder extends Seeder {

  public function run ()
  {
    DB::table('buckets')->delete();

    $user = User::first();

    var_dump($user->id);

    $goods = Goods::all();

    foreach ($goods as $good) {
    
      $goodInfo = GoodExtraInfo::where('good_id', '=', $good->id)->first();
    
      Bucket::create([
          
        'user_id' => $user->id,

        'good_id' => $good->id,

        'active' => 1,

        'nick_name' => $good->name,

        'comment' => '测试，测试',

        'ext_1'  => $goodInfo->icon_url
          
      ]);
    
    }

  }

}
