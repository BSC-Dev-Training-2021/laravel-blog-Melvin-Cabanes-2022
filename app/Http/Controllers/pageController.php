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
        return view('blog.post');
    }
    public function messages() {
        return view('blog.messages');
    }
    public function insertPost(Request $request, \Illuminate\Validation\Factory $validator) {
        

        $val = $validator->make($request->all(), [
            'title'=> 'required | min:10 | string',
            'description'=> 'required | min:10 | string',
            'content'=> 'required | min:10 | string'
        ]);
        if($val->fails()) {
            return redirect()->back()->withErrors($val);
        }
        // return redirect('/')->with('success', 'New blog created successfully!');
        return redirect('/')->with('success', 'Title: '. $request->input('title') . ' was uploaded successfully');
        return redirect('/')->with('fail', 'There is an error!');
    }
    
}
