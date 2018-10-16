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
            <hr>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
            </div>
        </div>
    </div>

@endsection
