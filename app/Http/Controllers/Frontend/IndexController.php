<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Language;
use App\Models\Page;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    /**
     * Show index page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $services = Page::getServicePages();
        $slides = Page::getSlides();

        return view('frontend.index', compact('services', 'slides'));
    }

    public function lang(Request $request, $lang = false): RedirectResponse
    {
        if ($lang){
            $requestLanguage = strtolower($lang);
            $requestSiteLanguage = $requestLanguage;
            $requestDbLanguage = strtoupper((($requestLanguage === 'en') ? 'gb' : $requestLanguage));
            $dbLang = ($id = Language::where('code', $requestDbLanguage)->first()->id)
                ? $id
                : session('db_lang');
            $siteLang = isset(config('constants.languages')[$requestSiteLanguage])
                ? $requestSiteLanguage
                : session('site_lang');
            session(['db_lang' => $dbLang]);
            session(['site_lang' => $siteLang]);
        }
        return Redirect::back();

    }
}
