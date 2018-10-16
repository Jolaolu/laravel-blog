@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
		    <div class="panel-heading">
                <a href="/posts" class="btn btn-secondary " role="button">Back to Posts</a>
                <h2 class="text-center">{{$post->title}}</h2> <hr>
            </div>
            <div class="body">
                {{$post->body}}
            </div>
            <hr>
            <div>
            <small>Posted on {{$post->created_at}} in {{$post->category_id}}</small>
            <hr><br><br>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit Post</a>
            <span class= "float-right"><a href="/posts/{{$post->id}}/delete" class="btn btn-primary">Delete Post</a></span>
            </div>
        </div>
    </div>

@endsection
