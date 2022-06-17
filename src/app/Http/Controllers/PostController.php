<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/home');
        return Post::orderBy('created_at', 'DESC')->get();
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
        $newPost = new Post;
        $newPost->title =  $request->item["title"];
        $newPost->image =  $request->item["image"];
        $newPost->body =  $request->item["body"];
        $newPost->type_id =  $request->item["type_id"];
        $newPost->user_id =  $request->item["user_id"];
        $newPost->save();

        $data = [
            'data' => $newPost,
            'status' => (bool) $newPost,
            'message' => $newPost ? 'Post Created!' : 'Error Creating Post',
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $existingPost = Post::find($id);
        if($existingPost){
            $existingPost->delete();
        }

        $data = [
            'status' => (bool) $existingPost,
            'message' => $existingPost ? 'Post Deleted!' : 'Error Deleting Post',
        ];

        return response()->json($data);
    }
}
