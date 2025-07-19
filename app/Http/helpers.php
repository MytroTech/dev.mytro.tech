<?php

use App\Models\Language;
use App\Models\MetaTag;
use App\Settings\GeneralSettings;

if (!function_exists('getMetaTag')) {
    /**
     * Get the translated value of the meta tag (attribute) depending on the selected language.
     *
     * @param string $path
     * @param string $attribute
     * @param string|null $language_id
     * @return string
     */
    function getMetaTag(string $path, string $attribute, string $language_id = null): string
    {
        $path = str_replace(session('site_lang').'/','', $path);
        $metaTag = MetaTag::where('path', $path)->first();
        $metaTagDefault = MetaTag::where('path', '*')->first();
        return $metaTag
            ? $metaTag->translate($attribute, $language_id, $metaTagDefault->translate($attribute, $language_id, ''))
            : $metaTagDefault->translate($attribute, $language_id, '');
    }
}
if (!function_exists('getFullTitle')) {
    /**
     * Get the translated and full title of page
     *
     *
     */
    function getFullTitle()
    {
        $path = str_replace(session('site_lang').'/','',request()->path());
        if ($path === session('site_lang')){
            $path = '/';
        }
        $title = getMetaTag($path, 'title', session('db_lang'));
        $titleDefault = MetaTag::find(1)->translate('title', session('db_lang'), '');
        $routeTitle = "";
        if (request()->route())
        $routeTitle = trans('frontend/nav.captions.' . request()->route()->getName(), [], session('site_lang'));
//        $defaultTitle = getMetaTag('/', 'title', session('db_lang'));
        $currentPageTitle =
            (request()->fanew ? request()->fanew->translate('name', session('db_lang')) : null)
            ?? (request()->fvacancy ? request()->fvacancy->translate('name', session('db_lang')) : null)
            ?? (request()->service ? trans('frontend/nav.captions.' . request()->service, [], session('site_lang')) : null);
        if ($title === $titleDefault) {
            if ($routeTitle) {
                $title = $routeTitle . " | " . $title;
            }
            if ($currentPageTitle) {
                $title = $currentPageTitle . " | " . $title;
            }
        }

        return $title;
    }
}

if (!function_exists('lang_route')) {
    /**
     * Get url with lang param
     *
     *
     */
    function lang_route($name, $parameters = [], $absolute = true)
    {
        $parameters['lang'] = $parameters['lang'] ?? session('site_lang');
        return route($name, $parameters, $absolute);
    }
}
if (!function_exists('change_lang_url')) {
    /**
     * Get url with custom lang
     *
     *
     */
    function change_lang_url($lang)
    {
        // Проверим, существует ли активный язык в БД
        $activeLanguages = Language::query()->pluck('code')->toArray();

        if (!in_array($lang, $activeLanguages, true)) {
            return url()->current();
        }
        $currentUrl = explode('/', request()->getRequestUri());

        if (isset($currentUrl[1]) && in_array($currentUrl[1], $activeLanguages, true)) {
            $currentUrl[1] = $lang;
        } else {
            array_splice($currentUrl, 1, 0, [$lang]);
        }
        return implode('/', $currentUrl);
    }
}
if (!function_exists('check_current_place')) {
    /**
     * Get url with custom lang
     *
     *
     */
    function check_current_place($route, $parameters = [])
    {
        return substr_count(url()->current(), lang_route($route, $parameters));
    }
}

if (!function_exists('settings')) {
    /**
     * Get current lang
     *
     *
     */
    function settings($key = null)
    {
        if ($key) {
            return app(GeneralSettings::class)->$key;
        }
        return '';
    }

}
