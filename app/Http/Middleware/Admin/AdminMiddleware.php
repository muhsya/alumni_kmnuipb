<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Auth;

class AdminMiddleware
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
        if (!Auth::user()) {
            return redirect('no-enter-allowed/login');
        } elseif (Auth::user()->role->slug != 'super-admin') {
            return redirect('/');
        }
        return $next($request);
    }
}
