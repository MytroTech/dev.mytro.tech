<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    public function index(Request $request, $lang)
    {
        $vacancies = Vacancy::paginate(10);

        if ($vacancies->isEmpty() && $vacancies->currentPage() > 1) {
            return redirect()->route('career', ['page' => $vacancies->lastPage()]);
        }

        return view('frontend.career')->with('vacancies', $vacancies);
    }

    /**
     * Show one vacancy
     *
     */
    public function show(Request $request, $lang, Vacancy $slug)
    {
        $slug->loadPrevAndNext();
        return view('frontend.vacancy')->with('vacancy', $slug);
    }

}
