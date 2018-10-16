@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2> Dashboard</h2><hr>
                    </div>
                    <div class="panel-body">
                       <a href="/posts/create" class="btn btn-secondary" role="button">Create New Post</a>
                        <h3>Your Blog Posts</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
