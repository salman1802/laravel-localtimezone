<?php

namespace Iroid\LocalTimezone\Http\Middleware;

use Closure;
use Carbon\Carbon;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if ($timezone = session('user_timezone')) {
            // Carbon::setLocale($timezone);
        }

        return $next($request);
    }
}
