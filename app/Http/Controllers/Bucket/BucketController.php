<?php namespace App\Http\Controllers\Bucket;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Bucket;
use App\Models\Goods;
use App\Models\GoodExtraInfo;
use Illuminate\Http\Request;

class BucketController extends Controller {

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

  /*
   * Get favorite goods by uid.
   *
   *
   */
  public function getBucket (Request $request) {
  
    $uid = $request->input('uid');
  
    $myBucket = Bucket::where('user_id', '=', $uid)
        
        ->where('active', '=', '1')
          
        ->get();
  
    return $this->successResponse('data', $myBucket);
  
  }

  public function deleteBucket (Request $request) {
  
    $uid = $request->input('uid');

    $code = $request->input('gcode');

    $gid = $request->input('gid');

    $bucket = null;
  
    if (empty($code)) {
    
      $bucket = Bucket::where('good_id', '=', $gid)

            ->where('user_id', '=', $uid)

            ->where('active', '=', '1')
            
            ->first();
    
    } else {
    
        $bucket = Bucket::where('ext_1', '=', $gid)
            
            ->where('user_id', '=', $uid)
            
            ->first();
    
    }

    if (empty($bucket)) {
    
      return $this->failResponse('bucket not found.');
    
    }

    $bucket->active = 0;

    $bucket->save();

    $this->successResponse();
  
  }

  public function addBucket (Request $request) {
  
    $uid = $request->input('uid');

    $code = $request->input('gcode');

    if (empty($code)) {
    
      return $this->failResponse('code is required.');
    
    }

    $gid = $request->input('gid');

    if (empty($gid)) {
    
      return $this->failResponse('good id is required.');
    
    }

    $good = Goods::find($gid);

    if (empty($good)) {
    
      return $this->failResponse('good not found.');
    
    }

    if ($good->code != $code) {
    
      return $this->failResponse('good code not match.');
    
    }

    /*
     * 检测是否已经收藏.
     */
    $existBucket = Bucket::where('user_id', '=', $uid)

        ->where('good_id', '=', $gid)

        ->where('active', '=', '1')

        ->first();

    if (!empty($existBucket)) {
    
      return $this->failResponse('Already bucketed.');
    
    }


    $goodInfo = GoodExtraInfo::where('good_id', '=', $gid)->first();

    $icon = null;

    if (!empty($goodInfo)) {
    
      $icon = $goodInfo->icon_url;
    
    }

    $ext_2 = $request->input('ext_2'); 

    $nickname = $request->input('nick');

    $comment = $request->input('comment');

    $bucket = new Bucket;

    $bucket->user_id = $uid;

    $bucket->good_id = $gid;

    $bucket->nick_name = empty($nickname) ? '' : $nickname;

    $bucket->active = 1;

    $bucket->comment = empty($comment) ? '' : $comment;

    $bucket->ext_1 = $icon ? $icon : '';

    $bucket->ext_2 = $code;

    $bucket->save();

    return $this->successResponse();
  
  }

}
