<?php namespace App\Http\Controllers\Customer;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\CustomerExtrInfo;
use Illuminate\Http\Request;

class CustomersController extends Controller {

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
	  $cname = $request->input('uname');

    $cid = $request->input('uid');

    if (empty($cname)) {

      return $this->failResponse('uname is required.');
    
    }

    $customer = Customer::find($cid);

    $customer->name = $cname;

    $customer->save();

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

  public function updateChannel (Request $request) {
  
    $customerId = $request->input('uid');

    $channelId = $request->input('cid');

    if (empty($channelId)) {
    
      return $this->failResponse('cid is required.');
    
    }

    $customerInfo = CustomerExtraInfo::where('customer_id', '=', $customerId)->first();

    if (empty($customerInfo)) {
    
      return $this->failResponse('No user found.');
    
    }

    $customerInfo->ext_0 = $channelId;

    $customerInfo->save();
  
    return $this->SuccessResponse();
  
  }
  
  public function imgUpload (Request $request) 
  {
    //Get userid.
    $customerId = $request->input('uid');

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
    $relativeDir = $rootDir->value . md5($customerId);

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
    $customerPhoto = $photoDir . '/' . $filename;

    //Decode.
    $pContent = base64_decode($photo);

    //Create photo.
    $res = file_put_contents($customerPhoto, $pContent, true);

    if ($res <= 0) {
    
      return $this->failResponse('photo create failed.');
    
    }

    $customerInfo = CustomerInfo::where('customer_id', '=', $customerId)->get()[0];

    $info = CustomerInfo::find($customerInfo['id']);

    $info->pic_url = $relativeDir . '/' . $filename;

    $info->save();

    return $this->successResponse('pic_url', $info->pic_url);
  
  }

}
