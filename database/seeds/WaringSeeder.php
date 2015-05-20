<?php

use Illuminate\Database\Seeder; 
use App\Models\Warning;

class WarningSeeder extends Seeder {
  
  public function run () 
  {
     DB::table('warnings')->delete();

     $user = DB::table('users')->first();

     $mechines = DB::table('mechines')->where('uid', '=', $user->id)
              
         ->where('active', '=', '1')

         ->get();

     $settings = DB::table('v_user_setting_relat')->where('user_id', '=', $user->id)

         ->get();

     $userConfig = array();

     foreach($settings as $setting) {
     
         $userConfig[$setting->setting_name] = (array)$setting;
     
     }

     foreach ($mechines as $mechine) {
     
        $mid = $mechine->id;

        $type = $mechine->type;

        //0是温度 1是湿度
        if ($type == 1) {

          $h_humidities = DB::table('humidities')->where('user_id', '=', $user->id)

              ->where('mechine_id', '=', $mid)

              ->where('data', '>', $userConfig['h_warning_high']['setting_value'])

              ->get();

          foreach($h_humidities as $humidity) {

            Warning::create([
                
                'user_id' => $user->id,

                'mechine_id' => $mid,

                'd_id' => $humidity->id,

                'w_data' => $humidity->data,

                'n_data' => $userConfig['h_warning_high']['setting_value'],

                'up_down' => 1,

                'type' => $type
                
            ]);
          
          }

          $l_humidities = DB::table('humidities')->where('user_id', '=', $user->id)

              ->where('mechine_id', '=', $mid)

              ->where('data', '<', $userConfig['h_warning_low']['setting_value'])
          
              ->get();

          foreach ($l_humidities as $humidity) {

            warning::create([
                
                'user_id' => $user->id,

                'mechine_id' => $mid,

                'd_id' => $humidity->id,

                'w_data' => $humidity->data,

                'n_data' => $userConfig['h_warning_low']['setting_value'],

                'up_down' => 0,

                'type' => $type

                
            ]);
          
          }

        } else if ($type == 0) {
        
          $h_temperatures = DB::table('temperatures')->where('user_id', '=', $user->id)

              ->where('mechine_id', '=', $mid)

              ->where('data', '>', $userConfig['t_warning_high']['setting_value'])

              ->get();

          foreach($h_temperatures as $temperature) {

            Warning::create([
                
                'user_id' => $user->id,

                'mechine_id' => $mid,

                'd_id' => $temperature->id,

                'w_data' => $temperature->data,

                'n_data' => $userConfig['t_warning_high']['setting_value'],

                'up_down' => 1,

                'type' => $type
                
            ]);
          
          }

          $l_temperatures = DB::table('temperatures')->where('user_id', '=', $user->id)

              ->where('mechine_id', '=', $mid)

              ->where('data', '<', $userConfig['t_warning_low']['setting_value'])

              ->get();

          foreach($h_temperatures as $temperature) {

            Warning::create([
                
                'user_id' => $user->id,

                'mechine_id' => $mid,

                'd_id' => $temperature->id,

                'w_data' => $temperature->data,

                'n_data' => $userConfig['t_warning_low']['setting_value'],

                'up_down' => 0,

                'type' => $type
                
            ]);

          }

        }

     }

  }

}
