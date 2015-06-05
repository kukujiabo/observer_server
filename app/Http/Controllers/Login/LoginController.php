<?php namespace App\Http\Controllers\Login;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\UserExtInfo;
use Illuminate\Http\Request;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
    $name = $request->input('name');

    $password = $request->input('password');

    $user = User::where('name', '=', $name)->get()->toArray();

    if (empty($user)) {
    
      return $this->authFail(1);
    
    }

    $uInfo = $user[0];

    if ($uInfo['password'] != md5($password)) {

      return $this->authFail(2);
    
    }

    unset($uInfo['password']);

    $userExt = UserExtInfo::where('user_id', '=', $uInfo['id'])->get();

    if (!empty($userExt)) {

      $ext = $userExt[0];

      $uInfo['pic_url'] = $ext->pic_url;
    
      $uInfo['phone'] = $ext->phone;
    
    }
		
    return $this->successResponse('info', $uInfo);

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

}
