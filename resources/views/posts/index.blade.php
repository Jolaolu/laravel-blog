@extends('layouts.app')
    @section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">

                             <h2>Posts<span class="float-right"><a href="/home" class="btn btn-secondary" role="button">Return to Dashboard</a></span></h2>
                             <hr>
                        </div>

                        <div class="panel-body">
                            @if(count($posts)>0)
                                <ul class="list-group">
                                    @foreach ($posts as $post)
                                        <div class="well">
                                            <br>
                                            <li class="list-group-item">
                                               <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a><br></h3>
                                               <hr>
                                                <small>Posted on {{$post->created_at}}.</small><br>
                                                <small>Category: {{$post->category_id}}</small>
                                            </li>
                                        </div>

                                    @endforeach

                                </ul>
                                <br><br><br>
                            {{$posts->links()}}
                        </div>

                            @else
                                <p>No post found</p>
                            @endif
                    </div>
			    </div>
            </div>
        </div>
    @endsection
{{-- <footer class="footer">
    <div class="container">
        <span class="text-muted">Made with ❤ by <a href="https://twitter.com/jola_adebayor"> Anjolaoluwa</a>from 🇳🇬</span>
    </div>
</footer> --}}
