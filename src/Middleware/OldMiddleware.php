<?php

namespace Mystore\Middleware;


use Closure;
use Serz\Framework\Request\Request;

class OldMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        return $response;
    }

}