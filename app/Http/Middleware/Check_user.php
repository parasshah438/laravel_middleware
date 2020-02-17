<?php

namespace App\Http\Middleware;

use Closure;

class Check_user
{
    
    public function handle($request, Closure $next)
    {   

        if(Auth()->user()->isAdmin == 1)
        {
            return $next($request);   
        }
        
        return redirect('home')->with('error','You are not allowed to this page');
       
    }
}
