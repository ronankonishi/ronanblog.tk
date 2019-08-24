@extends('layouts.base')

@section('content')
	<div class="main projects">
		@if(count($posts) > 0)
			@foreach($posts as $post)
				<div class="post">
					<a href="projects/{{$post->id}}">
						<h3>{{$post->title}}</h3>
						<p>{{$post->date}}</p>
						<p>{{$post->body}}</p>
					</a>
				</div>
			@endforeach
		@else
			<p>No Posts Found</p>
		@endif
	</div>
@endsection