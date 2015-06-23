<?php namespace App\Http\Controllers\Goods;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use App\Models\GoodExtraInfo;
use App\Models\GoodAttribute;
use App\Models\Attributes;
use Illuminate\Http\Request;

class GoodsController extends Controller {

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
   * Get the info of good
   *
   *
   */
  public function getGoodInfo (Request $request) 
  {
    $gid = $request->input('gid');

    $gcode = $request->input('gcode');

    if (empty($gid) && empty($gcode)) {
    
      return $this->failResponse('gid and gcode must be provided alternately.');
    
    }
  
    $good = null;

    if ($gid) {
    
      $good = Goods::find($gid);
    
    } else if ($gcode) {
    
      $good = Goods::where('code', '=', $gcode)->first();
    
    }

    if (empty($good)) {
    
        return $this->failResponse('Good not found.');
    
    }

    $goodAttributes = GoodAttribute::where('good_code', '=', $good->code)

        ->where('active', '=', '1')
          
        ->get()
        
        ->toArray();

    $attributesValues = array();

    $attributesKeys = array();

    foreach ($goodAttributes as $goodAttribute) {

      $attributesKeys[$goodAttribute['attr_code']] = $goodAttribute['aname'];
    
      $attributesValues[$goodAttribute['attr_code']] = $goodAttribute['value'] . $goodAttribute['unit'];
    
    }
    
    $extInfo = GoodExtraInfo::where('good_id', '=', $good->id)->first();

    $info = array (

      'good' => $good,

      'attr_value' => $attributesValues,

      'attr_key' => $attributesKeys,

      'ext' => $extInfo
    
    );

    return $this->successResponse('data', $info);
  
  }

}
