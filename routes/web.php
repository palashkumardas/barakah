<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about/', function () {
  return view('pages/about');
});

Route::get('/services/', function () {
  return view('pages/services');
});

Route::get('/contact/', function () {
  return view('pages/contact');
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/privacy',  [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms',  [HomeController::class, 'terms'])->name('terms');
Route::get('/cookies',  [HomeController::class, 'cookies'])->name('cookies');

Route::group(['middleware' => 'web','prefix'=> 'admin'], function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/about-us', [AdminController::class, 'about'])->name('admin.about');
    Route::post('/about-update', [AdminController::class, 'aboutUpdate'])->name('admin.about.update');
    Route::get('/contact-us', [AdminController::class, 'contact'])->name('admin.contact');
    Route::post('/contact-update', [AdminController::class, 'contactUpdate'])->name('admin.contact.update');
    Route::get('/privacy-policy', [AdminController::class, 'policy'])->name('admin.policy');
    Route::post('/policy-update', [AdminController::class, 'policyUpdate'])->name('admin.policy.update');
    Route::get('/terms-and-condition', [AdminController::class, 'terms'])->name('admin.terms');
    Route::post('/terms-and-condition-update', [AdminController::class, 'termsUpdate'])->name('admin.terms.update');
    Route::get('/cookies-policy', [AdminController::class, 'coockies'])->name('admin.cookies');
    Route::post('/cookies-update', [AdminController::class, 'cookiesUpdate'])->name('admin.cookies.update');
    Route::get('/user-list', [AdminController::class, 'usertList'])->name('user.list');
    Route::get('/user-inactive/{$id}', [AdminController::class, 'userInactive'])->name('user.inactive');
    Route::get('/user-active/{$id}', [AdminController::class, 'userActive'])->name('user.active');
});

Auth::routes([
  'register' => true, // Registration Routes...
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
]);
