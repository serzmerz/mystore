<?php

namespace Mystore\Middleware;


use Closure;
use Serz\Framework\Request\Request;
use Serz\Framework\Response\RedirectResponse;

class IsAdminMiddleware
{

    public function handle(Request $request, Closure $next, $role1 = null, $role2 = null)
    {
        if ($request->getParamQuery("user") !== $role1)
            return new RedirectResponse("/");
        return $next($request);
    }

}