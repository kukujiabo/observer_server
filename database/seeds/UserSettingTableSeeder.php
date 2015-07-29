<?php 

use Illuminate\Database\Seeder; 
use App\Models\UserSetting;

class UserSettingTableSeeder extends Seeder {

    public function run() 
    {
      DB::table('user_settings')->delete();

      UserSetting::create([
          
          'setting_name' => 't_interval',

          'level' => 0,

          'superior' => 0,

          'active' =>  1,

          'comment' => '温度测量间隔'
          
      ]);
    
      UserSetting::create([
          
          'setting_name' => 'h_interval',

          'level' => 0,

          'superior' => 0,

          'active' => 1,

          'comment' => '湿度测量间隔'
          
      ]);

      UserSetting::create([
          
          'setting_name' => 't_warning',

          'level' => 0,

          'superior' => 0,

          'active' => 1,

          'comment' => '温度警告'
          
      ]);

      UserSetting::create([
          
          'setting_name' => 'h_warning',

          'level' => 0,

          'superior' => 0,

          'active' => 1,

          'comment' => '湿度警告'
          
      ]);
    
      UserSetting::create([
          
          'setting_name' => 't_warning_high',

          'level' => 1,

          'superior' => 0,

          'active' => 1,

          'comment' => '告警高温'
          
      ]);

      UserSetting::create([
          
          'setting_name' => 't_warning_low',

          'level' => 1,

          'superior' => 0,

          'active' => 1,

          'comment' => '告警低温'
          
      ]);

      UserSetting::create([
          
          'setting_name' => 'h_warning_high',

          'level' => 1,

          'superior' => 0,

          'active' => 1,

          'comment' => '告警高湿度'
          
      ]);

      UserSetting::create([
          
          'setting_name' => 'h_warning_low',

          'level' => 1,

          'superior' => 0,

          'active' => 1,

          'comment' => '告警低湿度'
          
      ]);
    }

}
