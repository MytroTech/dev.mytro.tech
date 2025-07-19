<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Show all news, or one article if slug passed
     *
     * @param Request $request
     * @param $lang
     * @return Factory|View|Application|RedirectResponse|\Illuminate\View\View|object
     */
    public function index(Request $request, $lang)
    {
        $news = News::orderBy('published_at', 'desc')->paginate(10);

        if ($news->isEmpty() && $news->currentPage() > 1) {
            return redirect()->route('news', ['page' => $news->lastPage()]);
        }

        return view('frontend.news', compact('news'));
    }

    public function show(Request $request, $lang, News $slug)
    {
        $slug->loadPrevAndNext();
        return view('frontend.anew', ['anew' => $slug]);
    }

}
