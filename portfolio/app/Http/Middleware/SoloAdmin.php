<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class SoloAdmin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(User::count() > 0){
			return redirect('/404');
		}	    

		return $next($request);
	}
}
