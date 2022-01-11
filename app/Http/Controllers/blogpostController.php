<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\blogpost;
use App\Models\blogpost_category;
use App\Models\blogpost_comment;
use App\Models\category_type;
use Illuminate\Http\Request;
use App\Http\Controllers\commentController;


class blogpostController extends Controller
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
            'image' => 'required | mimes:jpg,bmp,png,jpeg'
        ]);
        
        if($val->fails()) {
            return redirect()->back()->withErrors($val)->withInput();
        }
        
        $blogpost = new blogpost();
        $blogpost_category = new blogpost_categoryController();

        $blogpost -> title = $request->input('title');
        $blogpost -> description = $request->input('description');
        $blogpost -> content = $request->input('content');
        
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename =  $extension;
            $file->move(public_path('images'), $filename);
            $blogpost->image = $filename;
        } 
        $blogpost->save(); 
        $blogpost_category->store($request , $blogpost->id);
        
            // return redirect('/')->with('success', 'New blog created successfully!');
            return redirect('/')->with('success', 'New blog Created: '.  $request->input('title') );
            return redirect('/')->with('fail', 'There is an error!');
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blogpost  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $postdata = blogpost::orderBy('created_at', 'desc')->get();
        return view('blog.index', ['postdata' => $postdata]);
    }

    public function showArticle(blogpost $articleData) 
    {
       
        $showCategory = DB::table('blogpost_categories')
        ->where('blogpost_categories.blogpost_id', '=', $articleData->id)
        ->join('category_types', 'category_types.id', '=', 'blogpost_categories.category_type_id')
        ->get();

        $blogpost_comment = new blogpost_comment();
        $commentController = new commentController();

        $getComments = $commentController->showComments();
        
        // return $showCategory;
        // $data = blogpost::find($id);
        return view('blog.article', ['articleData' => $articleData], ['showCategory'=>$showCategory], ['getComments'=> $getComments]);
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogpost  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(blogpost $blogpost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogpost  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogpost $blogpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogpost  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(blogpost $blogpost)
    {
        //
    }
}
