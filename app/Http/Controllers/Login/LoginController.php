<?php namespace App\Http\Controllers\Login;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerExtraInfo;
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

    $customer= Customer::where('name', '=', $name)->get()->toArray();

    if (empty($customer)) {
    
      return $this->authFail(1);
    
    }

    $customerInfo = $customer[0];

    if ($customerInfo['password'] != md5($password)) {

      return $this->authFail(2);
    
    }

    unset($customerInfo['password']);

    $ext = CustomerExtraInfo::where('customer_id', '=', $customerInfo['id'])->first();

    if (!empty($ext)) {

      $customerInfo['pic_url'] = $ext->pic_url;
    
      $customerInfo['phone'] = $ext->phone;

      $customerInfo['channel_id'] = $ext->ext_0;
    
    }
		
    return $this->successResponse('info', $customerInfo);

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
