<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "\nCountry Check\n";
        echo "\n";
        print_r($request->country);
        if($request->country != "India" && $request->country != "india")
        {
            die("\nOnly Indians Allowed");
        }
        return $next($request);
    }
}
