@extends ('layouts.app')

    @section('content')
        <div class="jumbotron text-center">
            <h1 > Welcome!</h1>
            <p>This is a simple minimalist blog, where users can sign up create blog posts or read blog posts by other user  </p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">  Sign In</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    @endsection
