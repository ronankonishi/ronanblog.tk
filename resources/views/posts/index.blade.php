@extends('layouts.base')

@section('content')
	<div class="main posts">
		@if(count($posts) > 0)
			@foreach($posts as $post)
				<div class="post">
					<a href="posts/{{$post->id}}">
						<h3>{{$post->title}}</h3>
						<p>{{$post->created_at}}</p>
						<p>{!!$post->body!!}</p>
					</a>
				</div>
			@endforeach
			{{ $posts->links() }}
		@else
			<p>No Posts Found</p>
		@endif
	</div>
@endsection