<?php namespace App\Http\Controllers\wine;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WineController extends Controller {

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
   *
   *
   *
   */
  public function getInfoByCode (Request $request) 
  {
    $code = $request->input('code');

    $uid = $request->input('uid');
  
    if (empty($code)) {
    
      return $this->failResponse('code invalide.');
    
    }
  
    $test = array(

      'name' => '拉非红酒',
    
      'pic_url' => '/public/',

      'area' => '法国',

      'brand' => '拉菲',

      'grape' => '赤霞珠',

      'temp' => '24',

      'humi' => '80',

      'cur_temp' => '25',

      'cur_humi' => '78',

      'notice' => '温馨提示'

    );

    return $this->successResponse('info', $test);

  }


}
