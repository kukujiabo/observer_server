<?php namespace App\Http\Controllers\UserConfigSetting;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserSetting;
use App\Models\UserSettingRelat;
use App\Models\UserConfigSetting;
use Illuminate\Http\Request;

class UserConfigSettingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


  /**
   * update user config setting.
   * 
   * @param Request
   * @return Response
   */
  public function update(Request $request)
  {
    $userId = $request->input('uid');

    $settings = UserSetting::where('active', '=', '1')->get();

    $fieldValue = array();

    foreach ($settings as $setting) {

      $val = '';
    
      if (strlen($val = $request->input($setting->setting_name))) {
        
          UserConfigSetting::where('user_id', '=', $userId)

          ->where('setting_id', '=', $setting->id)

          ->update(['setting_value' => $val]);
      
      }
    
    }

    return $this->successResponse();
  
  }

}
