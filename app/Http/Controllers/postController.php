<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\blogpost_category;
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
                'content'=> 'required | min:10 | string',
                'image' => 'required | mimes:jpg,bmp,png,jpeg',
                
                
            ]);
            
            if($val->fails()) {
                return redirect()->back()->withErrors($val)->withInput();
            }
            
            $post = new post();
            $blogpost_category = new blogpost_category();
            
            $post -> title = $request->input('title');
            $post -> description = $request->input('description');
            $post -> content = $request->input('content');
            // $blogpost_category -> category_id = $request->input('categories');
            
            if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalName();
                $filename =  $extension;
                $file->move(public_path('images'), $filename);
                $post->image = $filename;
            } 
                // return $post;
                // return $blogpost_category;
                $post->save();
                // $blogpost_category->save(); 
            
                
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
    public function show()
    {
        $data = post::orderBy('created_at', 'desc')->get();
        return view('blog.index', ['data' => $data]);
    }

    public function showArticle($id) 
    {
        $data = post::find($id);
        return view('blog.article', ['data' => $data]);
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
