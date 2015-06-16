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
   * 上传头像
   *
   *
   *
   */
  public function imgUpload (Request $request) 
  {
    //Get userid.
    $uid = $request->input('uid');

    //Get file name.
    $filename = $request->input('filename');

    //Get photo.
    $photo = $request->input('photo');

    //Get file upload dir.
    $rootDir = $this->loadServerConfig('img_upload_dir')[0];

    //File name validate.
    if (empty($filename)) {

      return $this->failResponse('filename must be provided.');
    
    } else if (empty($photo)) {
    
      return $this->failResponse('photo must be provided.');
    
    }

    //Relative directory.
    $relativeDir = $rootDir->value . md5($uid);

    //User's image dir.
    $photoDir = public_path() . $relativeDir;

    //Create folder if it doesn't exists.
    if (!is_dir($photoDir)) {
    
      try {

        mkdir($photoDir, 0777);

      } catch (Exception $e) {
      
        return $this->failResponse('upload failed.');
      
      }
    
    }

    //Absolute path for photo.
    $userPhoto = $photoDir + $filename;

    //Decode.
    $pContent = base64_decode($photo);

    //Create photo.
    $res = file_put_contents($userPhoto, $pContent, true);

    if ($res <= 0) {
    
      return $this->failResponse('photo create failed.');
    
    }

    $userInfo = UserExtInfo::where('user_id', '=', $uid)->get()[0];

    $info = UserExtInfo::find($userInfo['id']);

    $info->pic_url = $relativeDir . '/' . $filename;

    $info->save();

    return $this->successResponse();
  
  }

}
