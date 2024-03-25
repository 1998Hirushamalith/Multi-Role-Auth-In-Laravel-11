<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

                // if the user trying to login and his/her user type is not admin they will redirect to dashboarrd page
                if(Auth::user()->usertype != 'admin')
                {
                    return redirect('/');
                }
                // if the user trying to login and his/her user type is admin and then they will redirect to admin page

        return $next($request);
    }
}
