<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArticleController;
use App\http\Controllers\PortfolioController;

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



Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/blog', [ArticleController::class, 'index']);

Route::get('/contact', function () {
    return view('pages/contact');
});


Route::get('/portfolio', [PortfolioController::class, 'index']);