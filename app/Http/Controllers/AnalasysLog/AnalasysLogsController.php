<?php namespace App\Http\Controllers\AnalasysLog;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\AnalasysLog;
use Illuminate\Http\Request;

class AnalasysLogsController extends Controller {

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
   * Get Analasys logs. 
   *
   *
   */
  public function getByCustomerId (Request $request)
  {
    $cid = $request->input('uid');

    $start = empty($request->input('start')) ? 0 : $request->input('start');

    $end = empty($request->input('end')) ? 10 : $request->input('end');

    $count = AnalasysLog::where('customer_id', '=', $cid)->count();

    if ($start > $count || $start < 0) {
    
      return $this->failResponse('请求的页数不存在');
    
    }

    $results = AnalasysLog::where('customer_id', '=', $cid)

              ->orderBy('id', 'desc')

              ->skip($start)

              ->take($end - $start)
  
              ->get();

    return $this->successResponse(array('totalCount', 'data'), array($count, $results));
  
  }

}
