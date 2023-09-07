<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->is_admin == 1) {
                return $next($request);
            }
            return redirect()->route('admin.login')->with('msg', 'Bạn không có quyền truy cập vào trang này.');
        }
        return redirect()->route('admin.login')->with('msg', 'Vui lòng đăng nhập để tiếp tục');
    }
}
