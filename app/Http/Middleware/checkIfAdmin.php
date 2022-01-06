<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!$request->session()->exists('user_id')) {
            return redirect('admin');
        }
        return $next($request);
    }
}
