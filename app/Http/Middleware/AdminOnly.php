<?php

namespace App\Http\Middleware;

use Closure;

class AdminOnly
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
        $isAdministrator = false;

        if (auth()->check()) {
            if(auth()->user()->administrator) {
                $isAdministrator = true;
            }
        }
        if(! $isAdministrator) {
            return redirect('/');
        }
        return $next($request);
    }
}
