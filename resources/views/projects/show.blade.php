@extends('layouts.base')

@section('content')
	<div class="main">
		<a href="/projects" class="btn btn-outline-secondary btn-sm">&lt</a>
		<br>
		<br>
		<div class="posts">
			<h3>{{$project->title}}</h3>
			<div class="subtitle-container">
				<p class="subtitle-italics">{{$project->start_date}} - {{$project->end_date}}</p> <p class="subtitle-bar"> |</p> <p class="subtitle">2 comments</p>
			</div>
			<img class="image-attachment" src="/storage/image_attachments/{{$project->image_attachment}}">
			<div class="blog-short-container">{!!$project->body!!}</div>
		</div>
		@auth
			<a href="/projects/{{$project->id}}/edit" class="btn btn-outline-dark">Edit</a>
			<div class="btn-container">
				{{Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])}}
					{{Form::hidden('_method', 'DELETE')}}
					{{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
				{{Form::close()}}
			</div>
		@endauth
	</div>
@endsection