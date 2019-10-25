@extends('layouts.base')

@section('header')
	@include('inc.navbar')
@endsection

@section('content')
	<h1>Edit Project</h1>
		{{Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}

				{{ csrf_field() }}

				<p>Title</p>
				{{Form::text('title', $project->title, ['placeholder' => 'Enter a title...'])}}

				<p>Description</p>
				{{Form::text('description', $project->description, ['placeholder' => 'Enter a description...'])}}

				<p>Category</p>
				{{Form::select('category', ['software' => 'Software', 'engineering' => 'Engineering', 
				'research' => 'Research'], $project->category)}}

				<p>Start Date</p>
				{{Form::text('start_date', $project->start_date, ['placeholder' => 'Enter a start date...'])}}

				<p>End Date</p>
				{{Form::text('end_date', $project->end_date, ['placeholder' => 'Enter a end date...'])}}

				<p>Body</p>
				{{Form::textarea('body', $project->body, ['placeholder' => 'Enter text...', 'id' => 'article-ckeditor'])}}

				{{Form::file('image_attachment')}}

				{{Form::hidden('_method', 'PUT')}}

				<br>
				{{Form::submit('Submit', ['class' => 'submit-btn'])}}

		{{Form::close()}}

@endsection