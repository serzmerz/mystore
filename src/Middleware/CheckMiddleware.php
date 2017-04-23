<?php

namespace Mystore\Middleware;


use Closure;
use Serz\Framework\Exceptions\GetNoResponseClassException;
use Serz\Framework\Request\Request;

class CheckMiddleware
{
    public function handle(Request $request, Closure $next, $status = null)
    {
        if ($request->getParamQuery("status") !== $status)
            throw new GetNoResponseClassException("Not valid code status!");
        return $next($request);
    }
}