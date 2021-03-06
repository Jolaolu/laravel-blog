<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['about','index','show'] ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::orderBy('title', 'desc')->get();
        $post = Post::orderBy('created_at', 'desc')-> paginate(5);
        return view('posts.index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'required|string|between:1,50',
                'body' => 'required|string|between:10,5000',
            ]
        );
        $post = new Post;
        $post->title=  $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/posts')-> with('success', 'Post Published');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {

            return redirect('/posts')->with('error', 'Unauthorized Page');
        } else {

            return view('posts.edit')->with('post', $post);
        }
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


        $this->validate(
            $request,
            [
                'title' => 'required|string|between:1,50',
                'body' => 'required|string|between:10,5000',
            ]
        );
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;

        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {

            return redirect('/posts')->with('error', 'Unauthorized Page');
        } else {
            $post->delete();

            return redirect('/posts')->with('success', 'Post Deleted');
        }
    }

}

