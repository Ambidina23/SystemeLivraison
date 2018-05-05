<?php

namespace App\Http\Middleware;

use Closure;
use Auth; //at the top

class Particulier
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
    if (Auth::check() && Auth::user()->type == 'particulier') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->type == 'organisme_public') {
        return redirect('/organisme_public');
    }
    else {
        return redirect('/entreprise');
    }
}
}