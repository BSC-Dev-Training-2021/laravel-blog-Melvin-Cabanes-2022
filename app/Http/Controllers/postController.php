<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, \Illuminate\Validation\Factory $validator)
    {
        $val = $validator->make($request->all(), [
            'title'=> 'required | min:10 | string',
            'description'=> 'required | min:10 | string',
            'content'=> 'required | min:10 | string'
        ]);
        if($val->fails()) {
            return redirect()->back()->withErrors($val);
        }

        $post = new post();
        $post -> title = $request->input('title');
        $post -> description = $request->input('description');
        $post -> content = $request->input('content');
        $post->save();

        // return redirect('/')->with('success', 'New blog created successfully!');
        return redirect('/')->with('success', 'New blog Created: '.  $request->input('title') );
        return redirect('/')->with('fail', 'There is an error!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        //
    }
}