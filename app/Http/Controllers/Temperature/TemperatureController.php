<?php namespace App\Http\Controllers\Temperature;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Temperature;
use Illuminate\Http\Request;

class TemperatureController extends Controller {

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

  /**
   * get data of temperature by page
   *
   * @return Response
   */
  public function temperatureByPage (Request $request) 
  {
      $userId = $request->input('uid');

      $mechineId = $request->input('mid');

      $tid = empty($request->input('tid')) ? null : $request->input('tid');

      $comp = $tid ? empty($request->input('comp')) ? 1 : 0 : null;

      $range = empty($request->input('range')) ? 50 : $request->input('range');

      $result = null;

      if (!empty($tid)) {

        if ($comp == 1) {

          $result = Temperature::where('user_id', '=', $userId) 

            ->where('mechine_id', '=', $mechineId)

            ->orderBy('id', 'desc')

            ->whereBetween('id', [$tid, $tid + $range])

            ->get();

        } else {
        
          $result = Temperature::where('user_id', '=', $userId) 

            ->where('mechine_id', '=', $mechineId)

            ->orderBy('id', 'desc')

            ->whereBetween('id', [$tid, $tid - $range])

            ->get();
        
        }
      
      } else {

        $result = Temperature::where('user_id', '=', $userId)

          ->where('mechine_id', '=', $mechineId)

          ->orderBy('id', 'desc')

          ->take($range)

          ->get();

      }

      return $this->successResponse('data', $result);
  
  }

  /**
   * get lastest data
   *
   * return JSON
   */
  public function getLastest (Request $request) 
  {
    $userId = $request->input('uid');

    $mechineId = $request->input('mid');

    $maxId = Temperature::where('user_id', '=', $userId)

        ->where('mechine_id', '=', $mechineId)

        ->max('id');

    $result = Temperature::where('id', '=', $maxId)->get();

    return $this->successResponse('data', $result);
  
  }

}
