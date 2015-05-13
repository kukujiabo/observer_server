<?php namespace App\Http\Middleware;

use Closure;

class UserValidateMiddleware {

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

    if (!strlen($userId)) {
    
      return json_encode(array(
      
        'code' => 0,

        'msg' => 'uid is required.'
      
      ));
    
    }

		return $next($request);
	}

}
