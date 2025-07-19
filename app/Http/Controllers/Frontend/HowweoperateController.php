<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HowweoperateController extends Controller
{
    /**
     * Show about page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */

public function index()
{
    $page = Page::where('slug', 'howweoperate')->first();

    if (!$page) {
        dd('Missing DB record');
    }

    if (!View::exists("frontend.howweoperate")) {
        dd('Missing view');
    }

    return view('frontend.howweoperate')->with('howweoperate', $page);
}

}
