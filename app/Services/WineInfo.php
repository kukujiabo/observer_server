<?php namespace App\Services;

use App\Models\Wine;
use App\Models\Attributes;
use App\Models\GoodAttribute;

class WineInfo {

  public function getWineByCode ($code) 
  {
    $q = Wine::where('code', '=', $code)->get();

    if (empty($q)) {
    
      return ;
    
    }
  
  
  
  
  }


}
