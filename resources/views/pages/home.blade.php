@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="well">
                        <div class="panel-heading">
                            <h2> Dashboard</h2><hr>
                        </div>
                        <div class="panel-body">
                        <a href="/posts/create" class="btn btn-secondary" role="button">Create New Post</a><hr>
                            <h3>Your Blog Posts</h3>
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary ">Edit Post</a></td>
                                        <td>
                                            {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method' => 'POST', 'class'=> 'float-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{ Form::submit('Delete Post!',['class'=> 'btn btn-danger'])}}
                                            {!! Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
