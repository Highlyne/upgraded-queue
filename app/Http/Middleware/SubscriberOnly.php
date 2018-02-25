<?php

namespace App\Http\Middleware;

use Closure;

class SubscriberOnly
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
        $isSubscriber = false;

        if (auth()->check()) {
            if(auth()->user()->subscriber) {
                $isSubscriber = true;
            }
        }
        if(! $isSubscriber) {
            return redirect('/');
        }
        return $next($request);
    }
}
