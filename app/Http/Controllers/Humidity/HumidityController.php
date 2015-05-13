<?php namespace App\Http\Controllers\Humidity;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Humidity;
use Illuminate\Http\Request;
use Cache;

class HumidityController extends Controller {

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
   * get 10 points of Humidity data.
   *
   * $return Json
   */
  public function humidityByPage (Request $request) 
  {  
    $userId = $request->input('uid');

    $mechineId = $request->input('mid');

    $result = Humidity::where('user_id', '=', $userId)
        ->where('mechine_id', '=', $mechineId)
        ->orderBy('create_at', 'desc')
        ->orderBy('id', 'desc')
        ->skip(2 * ($page - 1))
        ->take(3)
        ->get();

    return $result->toJson();
  
  }

  /**
   * get lastest data
   *
   * return JSON
   */
  public function getLastest()
  {
      
  
  
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
