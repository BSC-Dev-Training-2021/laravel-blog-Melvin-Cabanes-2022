<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\postController;


    Route::get('/', [pageController::class, 'index']);
    
    Route::get('article', [pageController::class, 'article']);
    
    Route::get('about', [pageController::class, 'about']);
    
    Route::get('contact', [pageController::class, 'contact']);
    
    Route::get('post', [pageController::class, 'post']);
    
    Route::get('messages', [pageController::class, 'messages']);
    
    Route::post('blog.post',  [postController::class, 'store']);