<?php

use Illuminate\Database\Seeder; 
use App\Models\UserConfigSetting;

class UserConfigSettingTableSeeder extends Seeder {

  public function run () 
  {
    DB::table('user_config_settings')->delete();

    $user = DB::table('users')->first();
    /*
     * 测试用户测量温度间隔配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 10,

        'setting_value' => 30,

        'active' => 1,

        'comment' => ''
        
    ]);
  
    /*
     * 测试用户测量湿度间隔配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 11,

        'setting_value' => 1800,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户温度警告开关配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 12,

        'setting_value' => 1,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户湿度警告开关配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 13,

        'setting_value' => 1,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户高温警告配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 14,

        'setting_value' => 24,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户低温警告配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 15,

        'setting_value' => 17,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户高湿度警告配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 16,

        'setting_value' => 83,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户低湿度警告配置
     */
    UserConfigSetting::create([
    
        'user_id' => $user->id,

        'setting_id' => 17,

        'setting_value' => 77,

        'active' => 1,

        'comment' => ''
        
    ]);

  }

}
