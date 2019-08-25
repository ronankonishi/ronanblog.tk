@extends('layouts.api')

@section('content')
	<h1>Edit Post</h1>
		{{Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST'])}}

				{{ csrf_field() }}

				<p>Title</p>
				{{Form::text('title', $post->title, ['placeholder' => 'Enter a title...'])}}

				<p>Body</p>
				{{Form::textarea('body', $post->body, ['placeholder' => 'Enter text...', 'id' => 'article-ckeditor'])}}

				{{Form::hidden('_method', 'PUT')}}

				<br>
				{{Form::submit('Submit', ['class' => 'submit-btn'])}}

		{{Form::close()}}

@endsection