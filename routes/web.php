<?php

use App\Http\Controllers\PageController;
use App\Http\Middleware\SetLanguageForFrontendMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\{
    IndexController, AboutController, ServicesController,
    NewsController, CareerController, ContactsController,
    WhoweareController, WhatwedoController, HowweoperateController,
};
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', static function () {
    ray('My First Ray Message');
    return view('welcome');
});

// Обёртка для всех frontend-маршрутов
$frontendRoutes = function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::get('pages/{page:slug}', [PageController::class, 'index'])->name('page');
//    Route::get('pages/{page:slug}', [AboutController::class, 'index'])->name('about');
    Route::get('about', [AboutController::class, 'index'])->name('about');
    Route::get('about/whoweare', [WhoweareController::class, 'index'])->name('whoweare');
    Route::get('about/whatwedo', [WhatwedoController::class, 'index'])->name('whatwedo');
    Route::get('about/howweoperate', [HowweoperateController::class, 'index'])->name('howweoperate');
    Route::get('services/{service?}', [ServicesController::class, 'index'])->name('services');
    Route::get('news', [NewsController::class, 'index'])->name('news');
    Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');
    Route::get('career', [CareerController::class, 'index'])->name('career');
    Route::get('career/{slug}', [CareerController::class, 'show'])->name('career.show');
    Route::get('contacts', [ContactsController::class, 'index'])->name('contacts');
    Route::post('feedback', [ContactsController::class, 'feedback'])->name('contacts.feedback');
};

// Маршруты без /{lang}
Route::middleware([SetLanguageForFrontendMiddleware::class])
    ->name('nolang.')
    ->group($frontendRoutes);

// Маршруты с /{lang}
Route::middleware([SetLanguageForFrontendMiddleware::class])
    ->prefix('{lang}')
    ->name('')
    ->group(function () use ($frontendRoutes) {
        $frontendRoutes();
       Route::get('/{anything_else}', static function () {
           throw new NotFoundHttpException;
       })->name('404');
   });

