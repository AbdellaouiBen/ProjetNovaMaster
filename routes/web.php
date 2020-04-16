<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'IndexController@index')->name('index');

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::resource('presentation','PresentationController');
Route::resource('service','ServiceController');
Route::resource('pricing','PricingController');
Route::get('/pricing/{pricing}/download', 'PricingController@download')->name('pricing.download');
Route::resource('team','TeamController');
Route::resource('newsletter','NewsletterController');
Route::resource('user','UserController');
Route::resource('myprofil','MyprofilController');
Route::resource('password','PasswordController');
