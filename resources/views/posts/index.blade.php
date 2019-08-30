@extends('layouts.base')

@section('content')
	<div class="main posts">
		@if(count($posts) > 0)
			@foreach($posts as $post)
				<div class="post">
					<h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
					<div class="subtitle-container">
						<p class="subtitle-italics">{{$post->created_at->format('M. d, Y')}}</p> <p class="subtitle-bar"> |</p> <p class="subtitle">2 comments</p>
					</div>
					@if(strlen($post->body) > 200)
						<p>{!! preg_replace('/\s+?(\S+)?$/', '', substr($post->body, 0, 400)) !!} . . .</p>
					@else
						<p>{!! $post->body !!}</p>
					@endif
				</div>
			@endforeach
			<div class="pagination">
				{{ $posts->links() }}
			</div>
		@else
			<p>No Posts Found</p>
		@endif
	</div>
@endsection