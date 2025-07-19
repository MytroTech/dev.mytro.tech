<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function index(Request $request, $lang, Page $page = null)
    {
        if (is_null($page)) {
            return view('frontend.page', compact('page'));
        }

        if (!View::exists("frontend.{$page->slug}")) {
            abort(404);
        }

        return view("frontend.{$page->slug}", compact('page'));
    }

}
