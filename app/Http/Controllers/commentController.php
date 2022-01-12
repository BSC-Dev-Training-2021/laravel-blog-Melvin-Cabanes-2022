<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\blogpost;
use App\Models\blogpost_comment;
use App\Http\Controllers\blogpostController;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $blogpostComm = new blogpost_comment([
            'blogpost_id' => $request->input('hidden'),
            'comment' => $request->input('comment')
        ]);
        $blogpostComm->save();

       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showComments()
    {
        $blopostCon = new blogpostController;

        // $postComment = DB::table('blogposts')
        // ->join('blogpost_comments', 'blogpost_comments.blogpost_id', '=', $articleData->id)
        // ->where('blogposts.id', '=', 'blogpost_comments.blogpost_id')
        // ->get();

        $postComment = blogpost_comment::orderBy('created_at', 'desc')->get();
        return $postComment;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
