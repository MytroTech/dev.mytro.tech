<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{
    /**
     * Show about page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $page = Page::where('slug', 'about-2')->first();
        if (
            (!View::exists("frontend.about"))
            OR (!$page)
        ) {
            abort('404');
        }
        return view('frontend.about')->with('about', $page);
    }
}

