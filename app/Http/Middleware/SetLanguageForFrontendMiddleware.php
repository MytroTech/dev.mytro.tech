<?php

namespace App\Http\Middleware;

use App\Models\Language;
use App\Settings\GeneralSettings;
use Closure;
use Illuminate\Http\Request;
use Schema;
use Symfony\Component\HttpFoundation\Response;

class SetLanguageForFrontendMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): Response $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $urlLanguage = $request->route('lang');

        if (!$urlLanguage) {
            $acceptLang = $request->server('HTTP_ACCEPT_LANGUAGE');
            preg_match('/^.+[\,]([^;]+)[\;].+$/', $acceptLang, $matches);

            $requestLanguageCode = $matches[1] ?? Language::find(app(GeneralSettings::class)->default_language)->code ?? 'en';

            return redirect()->to("/{$requestLanguageCode}" . $request->getRequestUri());
        }

        $requestLanguageCode = strtolower($urlLanguage === 'gb' ? 'en' : $urlLanguage);

        try {
            if (Schema::hasTable('languages')) {
                $language = Language::where('code', $requestLanguageCode)->first()
                    ?? Language::find(app(GeneralSettings::class)->default_language);
            }
        } catch (\Throwable $e) {}

        $siteLang = $language?->code ?? session('site_lang', config('app.locale'));

        session([
            'db_lang' => $siteLang,
            'site_lang' => $siteLang,
        ]);

        app()->setLocale($siteLang);

        return $next($request);
    }
}
