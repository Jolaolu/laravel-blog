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
            </div>
        </div>
    </div>

@endsection
