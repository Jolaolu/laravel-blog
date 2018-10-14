@extends('layouts.app');

@section('content')
    <h2>Posts</h2>
    @if(count($posts)>1)
        @foreach ($posts as $post)
            <div class="well">
                <h3>{{$post->title}}</h3>
            <small>Posted on {{$post->created_at}} in {{$post->category_id}}</small>
            </div>
        @endforeach
    @else
            <p>No post found</p>
     @endif
@endsection;
