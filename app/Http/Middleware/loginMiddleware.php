<?php namespace App\Http\Middleware;

use Closure;

class loginMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

    //if (!$request->isMethod('post')) {

      //return json_encode(array('code' => 0, 'msg' => 'method fail.'));
    
    //}

    if (empty($request->input('name'))) {
    
      return json_encode(array('code' => 0, 'msg' => 'name is required.' ));
    
    } else if (empty($request->input('password'))) {
    
      return json_encode(array('code' => 0, 'msg' => 'password is required.'));
    
    }

		return $next($request);
	}

}
