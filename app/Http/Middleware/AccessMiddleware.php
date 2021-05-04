<?php

namespace App\Http\Middleware;

use Closure;

class AccessMiddleware
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
        foreach (auth()->user()->accesosRol() as $accesos) {
            if ($accesos->url == $request->route()->action['as']) {
                return $next($request);
            }
        }

        return redirect('403');
    }
}
