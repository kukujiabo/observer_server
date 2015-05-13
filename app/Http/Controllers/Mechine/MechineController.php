<?php namespace App\Http\Controllers\Mechine;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Mechine;
use Illuminate\Http\Request;

class MechineController extends Controller {

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
   * Get mechines' info by user
   *
   * @return json
   */
  public function getInfoByUser(Request $request)
  {

      $userId = $request->input('uid');
  
      $result = Mechine::where('uid', '=', $userId)

          ->orderBy('id', 'asc')

          ->get();

      return $this->successResponse('mechine_info', $result);
  
  }


  /**
   * Get mechines' info by user
   *
   * @return json
   */
  public function getInfoById(Request $request)
  {
    $mid = $request->input('mid');

    $result = Mechine::find($mid);
  
    return $this->successResponse('mechine_info', $result);
  
  }
}
