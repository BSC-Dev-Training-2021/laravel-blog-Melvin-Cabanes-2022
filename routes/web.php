<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('blog.index');
       
    })->name('blog.index');
    
    Route::get('article', function () {
        return view('blog.article');
       
    })->name('blog.article');
    
    Route::get('about', function () {
        return view('blog.about');
       
    })->name('blog.about');
    
    Route::get('contact', function () {
        return view('blog.contact');
       
    })->name('blog.contact');
    
    Route::get('post', function () {
        return view('blog.post');
       
    })->name('blog.post');
    
    Route::post('post', function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validation) {
            $val = $validation->make($request->all(), [
                'title' => 'required | min:10 | string',
                'description' => 'required | min:10 | string',
                'content' => 'required | min:10 | string',
            ]);
            if($val->fails()){
                return redirect()->back()->withErrors($val);
            }
            return redirect()->route('blog.index');
    
    })->name('blog.post');
    
    Route::get('messages', function () {
        return view('blog.messages');
       
    })->name('blog.messages');