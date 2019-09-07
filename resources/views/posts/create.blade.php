@extends('layouts.api')

@section('content')
	<h1>Create Post</h1>
		{{Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])}}

				{{ csrf_field() }}

				<p>Title</p>
				{{Form::text('title', '', ['placeholder' => 'Enter a title...'])}}

				<p>Body</p>
				{{Form::textarea('body', '', ['placeholder' => 'Enter text...', 'id' => 'article-ckeditor'])}}

				{{Form::file('image_attachment')}}

				<br>
				{{Form::submit('Submit', ['class' => 'submit-btn'])}}

		{{Form::close()}}

@endsection