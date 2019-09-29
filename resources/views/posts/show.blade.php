@extends('layouts.base')

@section('content')
	<div class="main posts">
		<a href="/posts" class="btn btn-outline-secondary btn-sm">&lt</a>
		<br>
		<br>
		<div class="post">
			<h3>{{$post->title}}</h3>
			<div class="subtitle-container">
				<p class="subtitle-italics">{{$post->created_at->format('M. d, Y')}}</p> <p class="subtitle-bar"> |</p> <p class="subtitle">2 comments</p>
			</div>
			<img class="image-attachment" src="/storage/image_attachments/{{$post->image_attachment}}">
			<div class="blog-short-container">{!!$post->body!!}</div>
		</div>
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