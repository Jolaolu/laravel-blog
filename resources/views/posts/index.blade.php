@extends('layouts.app')
    @section('content')
        <div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
                             <h2>Posts</h2>
                        </div>

                        <div class="panel-body">
                            @if(count($posts)>1)
                                <ul class="list-group">
                                    @foreach ($posts as $post)
                                        <div class="well">
                                           <li class="list-group-item">
                                               <h3>{{$post->title}}</h3>
                                                <small>Posted on {{$post->created_at}}.</small><br>
                                            </li>
                                        </div>

                                    @endforeach
                                </ul>
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
        <span class="text-muted">Made with ❤ by <a href="https://twitter.com/jola_adebayor">Anjolaoluwa</a>from 🇳🇬</span>
    </div>
</footer> --}}
