<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::controller(ArticleController::class)
    ->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/disclaimer', 'disclaimer')->name('disclaimer');
        Route::get('/privacy-policy', 'privacyPolicy')->name('privacy.policy');
        Route::get('/category/{slug}', 'category')->name('category');
        Route::get('/author/{slug}', 'author')->name('author');
        Route::get('/articles', 'articles')->name('articles');
        Route::get('/{slug}', 'article')->name('article');
    });
