<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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

        if(auth()->user()->user_type == 1) {

            return $next($request);
        }

        return redirect(route('welcome'))->with('admin_access', 'شما اجازه دسترسی به پنل ادمین را ندارید');
    }
}
