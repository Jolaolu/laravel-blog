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
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg">Edit Post</a>
            {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::submit('Delete Post!',['class'=> 'btn btn-danger btn-lg'])}}
            {!! Form::close()!!}
            </div>
        </div>
    </div>

@endsection
