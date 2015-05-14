<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

  /**
   * return JsonObject
   *
   * @author meroc
   * @params string $resKey, object $result
   * @return json object
   */
  protected function successResponse($resKey, $result) {
  
    $response = array ('code' => 1, 'msg' => '成功', $resKey => $result);

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

}
