<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\postController;


    Route::get('/', [postController::class, 'show'])->name('blog.index');
    
    Route::get('article', [pageController::class, 'article'])->name('blog.article');
    
    Route::get('about', [pageController::class, 'about'])->name('blog.about');
    
    Route::get('contact', [pageController::class, 'contact'])->name('blog.contact');
    
    Route::get('post', [pageController::class, 'post'])->name('blog.post');
    
    Route::get('messages', [pageController::class, 'messages'])->name('blog.messages');
    
    Route::post('blog.post',  [postController::class, 'store'])->name('blog.store');

    