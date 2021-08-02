<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ArticleController;
use App\http\Controllers\PortfolioController;





Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/backoffice', function () {
    return view('backoffice/homeAdmin');
});

Route::get('/blog', [ArticleController::class, 'index']);

Route::get('/contact', function () {
    return view('pages/contact');
});


Route::get('/portfolio', [PortfolioController::class, 'index'])->name('index');

Route::get('/createArticle', [ArticleController::class, 'create'])->name('create');

Route::post('/articles', [ArticleController::class, 'store'])->name('store');

Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('edit');

Route::get('/modif/article', [ArticleController::class, 'goto'])->name('goto');

Route::get('/articles/{id}/show', [ArticleController::class, 'show'])->name('show');

route::put('/articles/{id}/update', [ArticleController::class, 'update'])->name('update');

route::delete('/articles/{id}/delete', [ArticleController::class, 'destroy'])->name('delete');




Route::get('/createPortfolio', [portfolioController::class, 'create'])->name('create');

Route::post('/portfolio', [portfolioController::class, 'store'])->name('store');

Route::get('/portfolio/{id}/edit', [portfolioController::class, 'edit'])->name('edit');

Route::get('/modif/portfolio', [portfolioController::class, 'goto'])->name('goto');

Route::get('/portfolio/{id}/show', [portfolioController::class, 'show'])->name('show');

route::put('/portfolio/{id}/update', [portfolioController::class, 'update'])->name('update');

route::delete('/portfolio/{id}/delete', [portfolioController::class, 'destroy'])->name('delete');
