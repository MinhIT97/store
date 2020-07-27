<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AdminLoginMiddeware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $id   = $user->id;
            $user = User::find($id);
            if ($user->level == 1 && $user->status == 1 && $user->hasRole('superadmin') || $user->level == 1 && $user->status == 1 && $user->hasRole('admin')) {
                return $next($request);
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('admin-login');
        }
    }
}
