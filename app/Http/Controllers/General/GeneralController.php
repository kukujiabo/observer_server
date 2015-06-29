<?php namespace App\Http\Controllers\General;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Temperature;
use App\Models\Humidity;
use App\Models\SetsData;
use Illuminate\Http\Request;

class GeneralController extends Controller {

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


  public function unitTempHumi (Request $request) {
  
    $uid = $request->input('uid');
    
    $tid = $request->input('tid');

    $comp = $request->input('comp') == 0 ? '<' : '>';

    $range = $request->input('range');

    if (empty($tid)) {
    
      $results = SetsData::where('uid', '=', $uid)

                 ->orderBy('t_id', 'desc')

                 ->take($range)

                 ->get();
    
    } else {
    
      $results = SetsData::where('uid', '=', $uid)

                 ->where('t_id', $comp, $tid)

                 ->orderBy('t_id', 'desc')

                 ->take($range)

                 ->get();
    
    }

    return $this->successResponse('data', $results);
    
  }

}
