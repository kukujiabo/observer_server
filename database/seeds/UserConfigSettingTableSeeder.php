<?php

use Illuminate\Database\Seeder; 
use App\Models\CustomerConfigSetting;

class UserConfigSettingTableSeeder extends Seeder {

  public function run () 
  {
    DB::table('user_config_settings')->delete();

    $customer = DB::table('customers')->first();
    /*
     * 测试用户测量温度间隔配置
     */
    $setting = DB::table('user_settings')->where('setting_name', '=' , 't_interval')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 30,

        'active' => 1,

        'comment' => ''
        
    ]);
  
    /*
     * 测试用户测量湿度间隔配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 'h_interval')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 1800,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户温度警告开关配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 't_warning')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 1,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户湿度警告开关配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 'h_warning')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 1,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户高温警告配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 't_warning_high')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 24,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户低温警告配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 't_warning_low')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 17,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户高湿度警告配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 'h_warning_high')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 83,

        'active' => 1,

        'comment' => ''
        
    ]);

    /*
     * 测试用户低湿度警告配置
     */

    $setting = DB::table('user_settings')->where('setting_name', '=' , 'h_warning_low')->first();

    CustomerConfigSetting::create([
    
        'customer_id' => $customer->id,

        'setting_id' => $setting->id,

        'setting_value' => 77,

        'active' => 1,

        'comment' => ''
        
    ]);

  }

}
