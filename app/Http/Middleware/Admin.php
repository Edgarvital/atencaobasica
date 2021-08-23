<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if(\Auth::guest() || \Auth::user()->tipo_usuario_id != 1){
            return redirect(route('home'));

        }


        return $next($request);
    }
}
