<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(in_array(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2), ['es', 'en', 'it'])){
            return redirect('/'. substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
        }

        return redirect('/en');
    }
}
