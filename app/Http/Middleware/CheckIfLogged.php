<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfLogged
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
        if($request->session()->has('user'))
            return redirect('/')->with('error', 'Nemate pravo pristupa ovoj stranici');
        return $next($request);
    }
}
