<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;


class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() == null)
        {
            return redirect('login')->with('alert','กรุณาเข้าสู่ระบบ!!');
        } 
        if (auth()->user()->role == 'admin'){
            return $next($request);
        }
        if (auth()->user()->role == 'user'){
            return redirect('home')->with('alert','คุณไม่มีสิทธิ์เข้าถึง');
        }
        if (auth()->user()->role == 'employee'){
            return redirect('employee/home')->with('alert','คุณไม่มีสิทธิ์เข้าถึง');
        }

        
    }
}
