<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Humidity extends Model {

    /**
     * The database table used by the model.
     * 
     * @var string
     */
    protected $table = 'humidities';


    /**
     * To get the newest data for the pointed user and mechine. 
     *
     * @author: meroc Chen
     * @params: int, int
     * @return: array
     */
    public function newestData($uid, $mid)
    {
    
      return Humidity::where('user_id', '=', $uid)->where('mechine_id', '=', $mid)->firstOrFail();
    
    }


}
