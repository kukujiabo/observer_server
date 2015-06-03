<?php

use Illuminate\Database\Seeder; 
use App\Models\ServerConfig;

class ServerConfigTableSeeder extends Seeder {

  public function run () 
  {
  
    DB::table('server_configs')->delete();

    ServerConfig::create([
        
      'field' => 'img_upload_dir', 

      'value' => '/public/imgs/',

      'comment' => '图片上传根目录'
        
    ]);
  
  }

}
