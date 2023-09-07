<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PowerControler;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PowerControlelr;
use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\CustommerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\HomeController as FontendController;
use App\Http\Controllers\HomeController as ControllersHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [HomeController::class, 'index']);
Route::get("/", [FontendController::class, "index"]);
Route::post("/get-comment", [FontendController::class, "sendComment"])->name('sendMail');
Route::post("/send-question", [FontendController::class, "sendQuestion"])->name('sendQuestion');
Route::post("/load-more-comment", [FontendController::class, "loadMoreComment"])->name('loadMoreComment');
Route::get("/post/{slug}", [FontendController::class, "show"])->name('loadMoreComment');
Route::post('send-mail', [FontendController::class, 'sendMail']);


Route::prefix('admin')->name("admin.")->group(function () {
    Route::get("login", [AuthController::class, "index"])->name('login');
    Route::get("logout", [AuthController::class, "logout"])->name('logout');
    Route::post("login", [AuthController::class, "login"])->name('post.login');
    Route::get("register", [AuthController::class, "register"])->name('register');
    Route::post("register", [AuthController::class, "postRegister"])->name('post.register');
});
Route::prefix('admin')->middleware('checklogin')->name("admin.")->group(function () {
    Route::get("/", [HomeController::class, "index"])->name("index");
    Route::resource('user', UserController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('categories', CategoriesController::class);
    Route::resource('post', PostController::class);
    Route::resource('review', ReviewController::class);
    Route::resource('custommer', CustommerController::class);
    Route::resource('services', ServicesController::class);
    Route::post('post-active', [PostController::class, 'activePost']);
    Route::post('slider-active', [SliderController::class, 'activeSlider']);
    Route::post('review-active', [ReviewController::class, 'activeReview']);
    Route::post('custommer-active', [CustommerController::class, 'activeCustommer']);
    Route::prefix('option')->name('option.')->group(function () {
        Route::get('/', [OptionController::class, 'post'])->name('post');
        Route::get('configuration', [OptionController::class, 'configuration'])->name('configuration');
        Route::post('configuration', [OptionController::class, 'postConfiguration'])->name('postConfiguration');
        //banner
        Route::get('banner', [OptionController::class, 'banner'])->name('banner');
        Route::post('banner', [OptionController::class, 'PostBanner'])->name('PostBanner');
        //custommer
        Route::get('custommer', [OptionController::class, 'custommer'])->name('custommer');
        Route::post('custommer', [OptionController::class, 'PostCustommer'])->name('PostCustommer');
        //review
        Route::get('review', [OptionController::class, 'review'])->name('review');
        Route::post('review', [OptionController::class, 'PostReview'])->name('PostReview');
        //review
        Route::get('custommerHightlight', [OptionController::class, 'custommerHightlight'])->name('hightlight');
        Route::post('custommerHightlight', [OptionController::class, 'PostcustommerHightlight'])->name('PostcustommerHightlight');
        //
        Route::post('getoption', [OptionController::class, 'getOption'])->name('getoption');
        Route::delete('deletePower/{key}', [OptionController::class, 'deletePower'])->name('deletePower');
    });
    Route::prefix('home')->name('home.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });
});
