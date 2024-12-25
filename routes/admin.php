<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\WeOfferController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\AboutImageController;
use App\Http\Controllers\Admin\Pages\HomeController;
use App\Http\Controllers\Admin\Pages\AboutController;
use App\Http\Controllers\Admin\Pages\NpdatController;
use App\Http\Controllers\Admin\RovaProductController;
use App\Http\Controllers\Admin\RovaReviewController;
use App\Models\RovaReview;

Route::middleware('guest:admin')->group(function () {

   Route::view('login', 'dashboard.auth.login')->name('loginForm');

   Route::post('login', [AuthController::class, 'login'])->name('login');
});


Route::middleware('auth:admin')->group(function () {

   Route::get('/', DashboardController::class)->name('index');

   Route::prefix('dashboard')->group(function () {
      Route::resource('roles', RoleController::class)->except('show');

      Route::resource('admins', AdminController::class)->except('show');
   });

   Route::resource('questions', QuestionController::class)->except('show');

   Route::post('questions/change-category/{question}', [QuestionController::class, 'changeCategory'])->name('questions.changeCategory');

   Route::resource('terms', TermsController::class)->except('show');

   Route::resource('privacy', PrivacyController::class)->only('index', 'update');

   Route::prefix('settings')->name('settings.')->group(function () {
      Route::get('/', [SettingController::class, 'index'])->name('index');

      Route::post('general', [SettingController::class, 'updateGeneral'])->name('updateGeneral');
      Route::post('social', [SettingController::class, 'updateSocial'])->name('updateSocial');
      Route::post('app', [SettingController::class, 'updateAppLinks'])->name('updateAppLinks');
   });

   Route::prefix('pages')->name('pages.')->group(function () {
      Route::prefix('home')->name('home.')->group(function () {
         Route::get('/', [HomeController::class, 'index'])->name('index');
   
         Route::post('banner', [HomeController::class, 'updateBanner'])->name('updateBanner');
         Route::post('npdat', [HomeController::class, 'updateNpdat'])->name('updateNpdat');
         Route::post('rova', [HomeController::class, 'updateRova'])->name('updateRova');
         Route::post('invest', [HomeController::class, 'updateInvest'])->name('updateInvest');
         Route::post('contact', [HomeController::class, 'updateContact'])->name('updateContact');
         Route::post('services', [HomeController::class, 'updateServices'])->name('updateServices');
      });

      Route::prefix('about')->name('about.')->group(function () {
         Route::get('/', [AboutController::class, 'index'])->name('index');
   
         Route::post('banner', [AboutController::class, 'updateBanner'])->name('updateBanner');
         Route::post('goals', [AboutController::class, 'updateGoals'])->name('updateGoals');
         Route::post('icons', [AboutController::class, 'updateIcons'])->name('updateIcons');
         Route::post('counters', [AboutController::class, 'updateCounters'])->name('updateCounters');
         Route::post('ceo', [AboutController::class, 'updateCeo'])->name('updateCeo');
         Route::post('partner-title', [AboutController::class, 'updatePartnerTitle'])->name('updatePartnerTitle');
      });

      Route::prefix('rova')->name('rova.')->group(function () {
         Route::get('/', [AboutController::class, 'index'])->name('index');

         Route::post('banner', [AboutController::class, 'updateBanner'])->name('updateBanner');
         Route::post('goals', [AboutController::class, 'updateGoals'])->name('updateGoals');
         Route::post('icons', [AboutController::class, 'updateIcons'])->name('updateIcons');
         Route::post('counters', [AboutController::class, 'updateCounters'])->name('updateCounters');
         Route::post('ceo', [AboutController::class, 'updateCeo'])->name('updateCeo');
         Route::post('partner-title', [AboutController::class, 'updatePartnerTitle'])->name('updatePartnerTitle');
      });
      Route::prefix('npdat')->name('npdat.')->group(function () {
         Route::get('/', [NpdatController::class, 'index'])->name('index');
   
         Route::post('banner', [NpdatController::class, 'updateBanner'])->name('updateBanner');
         Route::post('app1', [NpdatController::class, 'updateApp1'])->name('updateApp1');
         Route::post('app2', [NpdatController::class, 'updateApp2'])->name('updateApp2');
         Route::post('npdat', [NpdatController::class, 'updateNpdatTitle'])->name('updateNpdatTitle');
         Route::post('icons', [NpdatController::class, 'updateIcons'])->name('updateIcons');
         Route::post('download', [NpdatController::class, 'updateDownload'])->name('updateDownload');
         Route::post('partner-title', [NpdatController::class, 'updatePartnerTitle'])->name('updatePartnerTitle');
      });
   });

   Route::prefix('web')->name('web.')->group(function () {
      Route::resource('pages', PageController::class);

      Route::post('pages/change-status/{page}', [PageController::class, 'changeStatus'])->name('pages.changeStatus');

      Route::resource('contacts', ContactController::class)->only('index', 'show', 'destroy');
      Route::resource('subscribes', SubscribeController::class)->only('index', 'destroy');
   });

   Route::resource('partners', PartnerController::class)->except('show');

   Route::resource('services', ServiceController::class)->except('show');

   Route::resource('aboutImages', AboutImageController::class)->except('show');

   Route::resource('weOffers', WeOfferController::class)->except('show');

   Route::resource(
   'rova-products', RovaProductController::class)->except('show');
   Route::resource('rova-reviews',RovaReviewController::class)->except('show');

   Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
