@extends('layouts.app')


@section('content')
<div class="container">
     <h2>Edit Post</h2><hr>
     {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title:', ['class'=> 'control-label'])}}
            {{Form::text('title', $post->title , ['class'=> 'form-control', 'placeholder' => 'Post Title'])}}
         </div>
          <div class="form-group">
            {{Form::label('body', 'Body:', ['class'=> 'control-label'])}}
            {{Form::textarea('body', $post->body , ['class'=> 'form-control', 'placeholder'=> 'Post Body',  ])}}
         </div><br><br>
         {{ Form::hidden('_method', 'PUT')}}
         <span class="float-right">{{ Form::submit('Publish Post!',['class'=> 'btn btn-primary btn-lg'])}}</span>
    {!! Form::close() !!}
</div>

        <script>
			CKEDITOR.replace( '.editor1' );
		</script>
@endsection
