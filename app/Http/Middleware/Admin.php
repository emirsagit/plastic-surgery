<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle(Request $request, Closure $next)
    {
            if(! Auth::check()) {
                abort(403, 'Bu işlemi yapmaya yetkiniz yok');
            }
            if(! auth()->user()->isAdmin()) {
                abort(403, 'Bu işlemi yapmaya yetkiniz yok');
            }
            return $next($request);
    }
}
