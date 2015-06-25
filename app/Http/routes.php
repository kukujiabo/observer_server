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
//Route::get('/', )

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
    Route::get('/', 'UserConfigSettingsController@index');

    Route::get('update', 'UserConfigSettingsController@update');
  }

);

Route::group(['prefix' => 'warning', 'namespace' => 'Warning', 'middleware' => 'user'],

  function ()
  {
    Route::get('/', 'WarningsController@index');

    Route::get('list', 'WarningsController@getWarnings');
  }

);

Route::group(['prefix' => 'analasys', 'namespace' => 'AnalasysLog', 'middleware' => 'user'],

  function () 
  {
    Route::get('/', 'AnalasysLogsController@index');

    Route::get('getLogsByUserId', 'AnalasysLogsController@getByUserId');
  }

);

Route::group(['prefix' => 'info', 'namespace' => 'Info'],

  function ()
  {
    Route::get('/', 'InfosController@index');

    Route::get('getInfo', 'InfosController@getInfo');
  }

);

Route::group(['prefix' => 'goods', 'namespace' => 'Goods', 'middleware' => 'user'],

  function () 
  {
    Route::get('/', 'GoodsController@index');
  
    Route::get('info', 'GoodsController@getGoodInfo'); 
  }

);

Route::group(['prefix' => 'buckets', 'namespace' => 'Bucket', 'middleware' => 'user'], 

  function ()
  {
    Route::get('/', 'BucketController@index');
  
    Route::get('myBucket', 'BucketController@getBucket');
  }

);

Route::group(['prefix' => 'userinfo', 'namespace' => 'UserExtInfo', 'middleware' => 'user'],
  
  function () 
  {
    Route::get('/', 'UserExtInfosController@index');
  
    Route::get('getInfoById', 'UserExtInfosController@getInfoByUserId');
  }

);

/**
 * 用户相关路由
 *
 *
 */
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => 'user'],

  function ()
  {

    Route::get('/', 'UsersController@index');

    Route::post('profileImageUpload', 'UsersController@imgUpload');

    Route::get('edit', 'UsersController@edit');

    Route::post('updateChannel', 'UsersController@updateChannel');

  }

);


Route::group(['prefix' => 'wine', 'namespace' => 'Wine', 'middleware' => 'user'], 

  function ()
  {
    Route::get('/', 'WineController@index');
  
    Route::get('wineByCode', 'WineController@getInfoByCode');
  }

);

Route::group(['prefix' => 'login', 'namespace' => 'Login', 'middleware' => 'login'],

  function ()
  {
    Route::post('/', 'LoginController@index');
  }

);

Route::controllers([

	'auth' => 'Auth\AuthController',

	'password' => 'Auth\PasswordController',

]);

