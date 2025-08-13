<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MustBeAdmininistrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


          if(auth()->guest()){
            abort(403,'pole endelea kupambana');
        }
        
        // Check if the user is an admin
        if(auth()->user()->username !== 'adminwilly'){
            abort(403, 'Unauthorized');
        }
        
        return $next($request);
    }
    
}
