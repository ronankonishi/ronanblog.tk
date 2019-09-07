@extends('layouts.api')

@section('content')
	<h1>Create Project</h1>
		{{Form::open(['action' => 'ProjectsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}

				{{ csrf_field() }}

				<p>Title</p>
				{{Form::text('title', '', ['placeholder' => 'Enter a title...'])}}

				<p>Description</p>
				{{Form::text('description', '', ['placeholder' => 'Enter a description...'])}}

				<p>Category</p>
				{{Form::select('category', ['software' => 'Software', 'engineering' => 'Engineering', 
				'research' => 'Research'])}}

				<p>Start Date</p>
				{{Form::text('start_date', '', ['placeholder' => 'Enter a start date...'])}}

				<p>End Date</p>
				{{Form::text('end_date', '', ['placeholder' => 'Leave empty if still in progress'])}}

				<p>Body</p>
				{{Form::textarea('body', '', ['placeholder' => 'Enter text...', 'id' => 'article-ckeditor'])}}

				{{Form::file('image_attachment')}}

				<br>
				{{Form::submit('Submit', ['class' => 'submit-btn'])}}

		{{Form::close()}}

@endsection