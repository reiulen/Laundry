<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class CekLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if(auth()->user()->role != 'Admin'){
            return redirect('dashboard');
        }
        return $next($request);
    }
}
