<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\blogpostController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\blogpost_categoryController;
use App\Http\Controllers\commentController;


    Route::get('/', [blogpostController::class, 'show'])->name('blog.index');
    
    Route::get('article/{articleData}', [blogpostController::class, 'showArticle'])->name('article');
    
    Route::get('about', [pageController::class, 'about'])->name('blog.about');
    
    Route::get('contact', [pageController::class, 'contact'])->name('blog.contact');
    
    Route::get('post', [categoryController::class, 'show'])->name('blog.post');
    
    Route::get('messages', [pageController::class, 'messages'])->name('blog.messages');
    
    Route::post('blog.post',  [blogpostController::class, 'store'])->name('blog.store');

    Route::post('article', [commentController::class, 'store'])->name('blog.article');



    