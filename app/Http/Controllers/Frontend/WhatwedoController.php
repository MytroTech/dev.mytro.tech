<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class WhatwedoController extends Controller
{
    /**
     * Show about page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
  public function index()
  {
        $page = Page::where('slug', 'whatwedo')->first();
        if (
            (!View::exists("frontend.whatwedo"))
            OR (!$page)
        ) {
            abort('404');
        }
        return view('frontend.whatwedo')->with('whatwedo', $page);

  }
}
