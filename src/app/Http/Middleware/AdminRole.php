<?php

namespace App\Http\Middleware;

use App\Models\User;
use Auth;
use Closure;

class AdminRole
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
        if (Auth::check())
        {
            $users = User::all();

            if(!is_null(Auth::user()->deleted_at)){
                return redirect('/');
            }
            if(Auth::user()->role == 'admin'){
                return $next($request);
            }
        }
        return redirect('/');
    }
}
