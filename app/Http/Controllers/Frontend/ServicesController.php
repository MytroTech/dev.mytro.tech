<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class ServicesController extends Controller
{
    /**
     * Show service page view by slug from url.
     *
     * @param Request $request
     * @param $lang
     * @param Service|null $service
     * @return Factory|\Illuminate\View\View
     */
    public function index(Request $request, $lang, Service $service = null)
    {
        $services = Page::getServicePages();
        $slides = Page::getSlides();

        if (is_null($service)) {
            return view('frontend.index', compact('services', 'slides'));
        }

        if (!View::exists("frontend.{$service->slug}")) {
            abort(404);
        }

        return view("frontend.{$service->slug}", compact('service', 'services', 'slides'));
    }
}
