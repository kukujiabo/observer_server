<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\ServerConfig;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

  /**
   * return JsonObject
   *
   * @author meroc
   * @params string $resKey, object $result
   * @return json object
   */
  protected function successResponse($resKey = null, $result = null) {

    $response = array ('code' => 1, 'msg' => 'ok');

    if (is_array($resKey)) {
      
      foreach ($resKey as $key => $val) {
      
        $response[$val] = $result[$key];
      
      }
    
    } else if (strlen($resKey)) {

      $response[$resKey] = $result;  
    
    }

    return json_encode($response);
  
  }

  /**
   * return JsonObject
   *
   * @author meroc
   * @params string $resKey, object $result
   * @return response
    */
  protected function failResponse($msg) {
  
    $response = array ('code' => 0, 'msg' => $msg);

    return json_encode($response);
  
  }

  /**
   * return JsonObject
   *
   * @author meroc
   * @params int $type
   * @return response
   */
  protected function authFail ($type) {

    $response = array('code' => 0, 'type' => $type);

    switch ($type) {

      case 1:

          $response['msg'] = 'user not found.';

          break;

      case 2:

          $response['msg'] = 'password not match.';

          break;
    
    }

    return json_encode($response);
    
  }

  /**
   *
   *
   *
   *
   */
  protected function loadServerConfig ($names) 
  {
    if (is_array($names)) {

      $results = array();
    
      foreach ($names as $name) {

        $results[$name] = ServerConfig::where('field', '=', $name)->get();
         
      }

      return $results;
    
    } else if (is_string($names)) {
    
      return ServerConfig::where('field', '=', $names)->get();
    
    }
  
  }

}
