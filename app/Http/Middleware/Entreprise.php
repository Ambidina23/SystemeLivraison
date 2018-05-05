<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Entreprise
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
    if (Auth::check() && Auth::user()->type == 'entreprise') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::user()->type == 'particulier') {
        return redirect('/particulier');
    }
    else {
        return redirect('/organisme_public');
    }
}

}


