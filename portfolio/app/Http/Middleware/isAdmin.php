<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Http\Response;

class isAdmin
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
		if(Auth::check()){	
			if(!Auth::user()->admin){
				return new Response(view('errors.404'));
			}
		}
		return $next($request);
	}
}
