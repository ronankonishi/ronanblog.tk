@extends('layouts.base')

@section('content')
	<h1>Create Post</h1>
		{{Form::open(['action' => 'ProjectPostsController@store', 'method' => 'POST'])}}

				{{ csrf_field() }}

				<p>Title</p>
				{{Form::text('title', '', ['placeholder' => 'Enter a title...'])}}

				<p>Body</p>
				{{Form::textarea('body', '', ['placeholder' => 'Enter text...', 'id' => 'article-ckeditor'])}}

				<br>
				{{Form::submit('Submit', ['class' => 'submit-btn'])}}

		{{Form::close()}}

@endsection