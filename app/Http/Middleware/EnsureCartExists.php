<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureCartExists
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('cart') || empty(session('cart'))) {
            return redirect('/')->with('error', 'Your cart is empty.');
        }

        return $next($request);
    }
}