<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\Auth;

//use Auth;


class MembershipPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(auth()->user()->status == NULL ){
            return redirect('member');
        }
        
        
        return $next($request);
    }
}
