<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // return POST::all();
        return view("posts.index",['isActive' => true , 'posts' => POST::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("posts.create" ,['isActive' => true ,'users'=> User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        Post::create(
            ['title' => $request->title , 'body' => $request->body , 'enabled' => 1 ,'user_id' => $request->user_id]
            );
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = Post::find($id);
        return view("posts.show",['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view("posts.edit",['id'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "<h2>Update the specified resource with id $id in storage.</h2>";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
