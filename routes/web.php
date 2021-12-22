<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
    // $tasks = DB::table('tasks')->get();

    // return $tasks;
});

Route::get('about', function () {
    return view('about');
});

Route::get('article', function () {
    return view('article');
});
Route::get('category', function () {
    return view('category');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('messages', function () {
    return view('messages');
});
Route::get('post', function () {
    return view('post');
}); 

