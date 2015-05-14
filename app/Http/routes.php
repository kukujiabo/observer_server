<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::group(['prefix' => 'temperature', 'namespace' => 'Temperature', 'middleware' => 'user_mechine'],

  function ()
  {

    Route::get('/', 'TemperatureController@index'); 

    Route::get('tpage', 'TemperatureController@temperatureByPage');
  
    Route::get('tnew', 'TemperatureController@getLastest');
  }

);

Route::group(['prefix' => 'humidity', 'namespace' => 'Humidity', 'middleware' => 'user_mechine'],
  
  function () 
  {
      Route::get('/', 'HumidityController@index');

      Route::get('hpage', 'HumidityController@humidityByPage');
  
      Route::get('hnew', 'HumidityController@getLastest');
  }

);

Route::group(['prefix' => 'mechine', 'namespace' => 'Mechine'],
 
  function ()
  {
      Route::get('/', 'MechineController@index');

      Route::get('getInfoByUser', ['middleware' => 'user', 'uses' =>  'MechineController@getInfoByUser']);

      Route::get('getInfoById', ['middleware' => 'user_mechine', 'uses' => 'MechineController@getInfoById']);
 
  }

);

Route::group(['prefix' => 'userconfig', 'namespace' => 'UserSettingRelat', 'middleware' => 'user'],

  function ()
  {
    Route::get('/', 'UserSettingRelatController@index');

    Route::get('getConfigByUser', 'UserSettingRelatController@getUserSettingByUser');
  }

);

Route::group(['prefix' => 'usersetting', 'namespace' => 'UserConfigSetting', 'middleware' => 'user'],

  function () 
  {
    Route::get('/', 'UserConfigSetting@index');

    Route::get('update', 'UserConfigSettingsController@update');
  }

);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
