@extends('layouts.base')

@section('content')
	<div class="main home">
		<div class="content">
			<div>
				<h5>Blog Article:</h5>
				<hr>
				<div class="post">
					@if(isset($post))
						<h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
						<div class="subtitle-container">
							<p class="subtitle-italics">{{$post->created_at->format('M. d, Y')}}</p> <p class="subtitle-bar"> |</p> <p class="subtitle">2 comments</p>
						</div>
						<img class="image-attachment" src="/storage/image_attachments/{{$post->image_attachment}}">
						@if(strlen($post->body) > 200)
							<div class="blog-short-container">{!! preg_replace('/\s+?(\S+)?$/', '', substr($post->body, 0, 330)) !!} . . .</div>
						@else
							<div class="blog-short-container">{!! $post->body !!}</div>
						@endif
					@endif
				</div>
			</div>
		</div>

		<div class="sidebar">
			<div>
				<h5>Why I Blog:</h5>	
				<hr>
				<div class="text-block">
					<p>I want to share my journey as an undergraduate student studying Computer Science in college with you. I hope my experiences can shed some light on what you can expect from this major. </p>
				</div>
			</div>
			<div>
				<h5>Portfolio Project:</h5>	
				<hr>
				<p></p>
			</div>
		</div>
	</div>
@endsection