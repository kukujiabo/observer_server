<?php namespace App\Http\Controllers\Warning;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Warning;
use Illuminate\Http\Request;

class WarningsController extends Controller {

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

  public function getWarnings (Request $request) {
  
    $start = empty($request->input('start')) ? 0 : $request->input('start');

    $end = empty($request->input('start')) ? 10 : $request->input('end');

    $uid = $request->input('uid');

    $type = $request->input('type');

    $mid = $request->input('mid');

    $count = Warning::where('user_id', '=', $uid)
          
              ->where('type', '=', $type)

              ->count();

    if ($count > $start) {
    
      return  $this->successResponse('totalCount', $count);
    
    }

    $results = Warning::where('user_id', '=', $uid)

                ->orderBy('id', 'desc')

                ->skip($start)

                ->take($end - $start)

                ->get();

    return $this->successResponse('data', $results);

  }

}
