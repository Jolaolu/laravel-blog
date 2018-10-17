@extends('layouts.app')

<<<<<<< HEAD

=======
>>>>>>> 81249e664c31dfecdf069984fcd44b11b1b6f9c7
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
<<<<<<< HEAD
=======
            <hr><br><br>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-lg">Edit Post</a>
            {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{ Form::submit('Delete Post!',['class'=> 'btn btn-danger btn-lg'])}}
            {!! Form::close()!!}
>>>>>>> 81249e664c31dfecdf069984fcd44b11b1b6f9c7
            </div>
        </div>
    </div>

@endsection
