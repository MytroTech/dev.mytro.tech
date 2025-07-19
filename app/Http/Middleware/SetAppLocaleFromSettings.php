<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;

class SetAppLocaleFromSettings
{
    public function handle(Request $request, Closure $next)
    {
        $locale = Cache::rememberForever('app.locale', static function () {
            return \DB::table('settings')->where('key', 'locale')->value('value') ?? config('app.locale');
        });

        App::setLocale($locale);
        return $next($request);
    }
}
