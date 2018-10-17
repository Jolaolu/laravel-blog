@extends('layouts.app')
    @section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
<<<<<<< HEAD
                             <h2>Posts</h2>
                        </div>

=======

                             <h2>Posts</h2>{{-- <span class="float-right"><a href="/home" class="btn btn-secondary" role="button">Return to Dashboard</a></span> --}}
                             <hr>
                        </div>

>>>>>>> 81249e664c31dfecdf069984fcd44b11b1b6f9c7
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
<<<<<<< HEAD
                                                <small>Category: {{$post->category_id}}</small>
=======
                                            <small>Category: {{$post->category_id}} by {{$post->name}}</small>
>>>>>>> 81249e664c31dfecdf069984fcd44b11b1b6f9c7
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
<<<<<<< HEAD
        <span class="text-muted">Made with ❤ by <a href="https://twitter.com/jola_adebayor">Anjolaoluwa</a>from 🇳🇬</span>
=======
        <span class="text-muted">Made with ❤ by <a href="https://twitter.com/jola_adebayor"> Anjolaoluwa</a>from 🇳🇬</span>
>>>>>>> 81249e664c31dfecdf069984fcd44b11b1b6f9c7
    </div>
</footer> --}}
