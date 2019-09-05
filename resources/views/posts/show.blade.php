@extends('layouts.base')

@section('content')
	<div class="main">
		<a href="/posts" class="btn btn-outline-secondary btn-sm">&lt</a>
		<br>
		<br>
		<h1>{{$post->title}}</h1>
		<small>{{$post->date}}</small>
		<div class="blog-short-container">{!!$post->body!!}</div>
		@auth
				<a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
				<div class="btn-container">
					{{Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])}}
						{{Form::hidden('_method', 'DELETE')}}
						{{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
					{{Form::close()}}
				</div>
		@endauth
	</div>
@endsection