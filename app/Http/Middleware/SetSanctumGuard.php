<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class SetSanctumGuard
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
         if (request()->segment(1) == 'api' &&  request()->segment(2) == 'employee') {
            config(['sanctum.guard' => 'empolyees']);
        } else {
            config(['sanctum.guard' => 'user']);
        }
        return $next($request);
    }
}
