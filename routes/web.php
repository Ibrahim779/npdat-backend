<?php

use App\Http\Middleware\SetLocal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\FaqController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\PageController;
use App\Http\Controllers\Website\RovaController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Website\NpdatController;
use App\Http\Controllers\Website\TermsController;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Website\InvestController;
use App\Http\Controllers\Website\ArticleController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\FinanceController;
use App\Http\Controllers\Website\PrivacyController;
use App\Http\Controllers\Website\ServiceController;
use App\Http\Controllers\Website\SubscribeController;
use App\Http\Controllers\Website\CreditRatingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::resource('contacts', ContactController::class)->only(['index', 'store']);

Route::get('about', [AboutController::class, 'index'])->name('about.index');

Route::get('services', [ServiceController::class, 'index'])->name('services.index');

Route::get('npdat', [NpdatController::class, 'index'])->name('npdat.index');

Route::get('rova', [RovaController::class, 'index'])->name('rova.index');

Route::get('invest', [InvestController::class, 'index'])->name('invest.index');

Route::get('careers', [CareerController::class, 'index'])->name('careers.index');

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('pages/{slug}', [PageController::class, 'show'])->name('pages.show');

Route::get('credit-rating', [CreditRatingController::class, 'index'])->name('credit-rating.index');

Route::post('subscribe',SubscribeController::class)->name('new_subscriber');

//Localization
Route::get('lang/{lang}', function ($lang) {
    session([SetLocal::LANG_KEY => $lang]);
    return back();
})->name('lang');
