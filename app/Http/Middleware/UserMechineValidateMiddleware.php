<?php namespace App\Http\Middleware;

use Closure;

class UserMechineValidateMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
    $userId = $request->input('uid');

    $mechineId = $request->input('mid');

    $page = strlen($request->input('page')) > 0 ? $request->input('page') : 1;

    if (!strlen($userId)) {
    
        return json_encode(array(  
          'code' => 0,
          'msg' => 'userId is required.' 
        ));
    
    } else if (!strlen($mechineId)) {
    
        return json_encode(array(  
          'code' => 0,
          'msg' => 'mechineId is required.' 
        ));
    
    }

		return $next($request);
	}

}
