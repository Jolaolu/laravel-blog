@extends('layouts.app')


@section('content')
<div class="container">
     <h2> Create New Post</h2><hr>
     {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title:', ['class'=> 'control-label'])}}
            {{Form::text('title', ' ', ['class'=> 'form-control', 'placeholder' => 'Post Title'])}}
         </div>
          <div class="form-group">
            {{Form::label('body', 'Body:', ['class'=> 'control-label'])}}
            {{Form::textarea('body', ' ', ['class'=> 'form-control', 'placeholder'=> 'Post Body'])}}
         </div><br><br>
         <span class="float-right">{{ Form::submit('Publish Post!',['class'=> 'btn btn-primary btn-lg'])}}</span>
    {!! Form::close() !!}
</div>


@endsection
