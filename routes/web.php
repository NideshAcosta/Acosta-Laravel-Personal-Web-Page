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

Route::get('/', function () {
    // return view('welcome');
    return View::make('pages.home');
    // return View::make('layouts.new');

});


//'/about' is not working from the given source code

Route::get('/lectures', function () {
    return View::make('pages.lectures');
});

Route::get('/about', function () {
    return View::make('pages.about');
});
Route::get('/contact', function () {
    return View::make('pages.contact');
});
Route::get('/more', function () {
    return View::make('pages.more');
});
Route::get('/more', function () {
    return View::make('pages.more');
});
Route::get('/lectures/laravelLecture', function () {
    return View::make('pages.laravelLecture');
});
Route::get('/lectures/gitLecture', function () {
    return View::make('pages.gitLecture');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
