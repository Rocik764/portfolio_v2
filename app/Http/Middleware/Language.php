<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class Language
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
        if (!array_key_exists($request->segment(1), config('app.locales'))) {
            // Store segments in array
            $segments = $request->segments();

            // Set the default language code as the first segment
            $segments = Arr::prepend($segments, config('app.default_locale'));

            // Redirect to the correct url
            return redirect()->to(implode('/', $segments));
        }

        // The request already contains the language code
        return $next($request);
    }
}
