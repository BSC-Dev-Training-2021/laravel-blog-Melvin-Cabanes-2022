<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class pageController extends Controller
{
    public function index() {

        return view('blog.index');
    }
    public function article() {        
        return view('blog.article');
    }
    public function about() {
        return view('blog.about');
    }
    public function contact() {
        return view('blog.contact');
    }
    public function post() {
        
        return view('blog.post' , []);
    }
    public function messages() {
        return view('blog.messages');
    }
    
}
