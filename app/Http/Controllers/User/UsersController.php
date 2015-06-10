<?php namespace App\Http\Controllers\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\UserExtInfo;
use Illuminate\Http\Request;

class UsersController extends Controller {

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
	public function edit(Request $request)
	{
	  $uname = $request->input('uname');

    $uid = $request->input('uid');

    if (empty($uname)) {

      return $this->failResponse('uname is required.');
    
    }

    $user = User::find($uid);

    $user->name = $uname;

    $user->save();

    return $this->successResponse();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
   *
   *
   *
   *
   */
  public function imgUpload (Request $request) 
  {
    $uid = $request->input('uid');

    $filename = $request->input('filename');

    $rootDir = $this->loadServerConfig('img_upload_dir');

    if (empty($filename)) {

      return $this->failResponse('filename must be provided.');
    
    }

    $userDir = $dir + md5($uid);

    if (!is_dir($userDir)) {
    
      mkdir($userDir);
    
    }

    if (Request::hasFile($filename) && Request::file($filename)->isValid()) {
    
      Request::file($filename)->move($userDir, $filename);
    
    }

    $userInfo = UserExtInfo::find($uid);

    $userInfo->pic_url = $userDir;

    $userInfo->save();

    return $this->successResponse();
  
  }

}
