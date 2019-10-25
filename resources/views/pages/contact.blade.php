@extends('layouts.base')

@section('header')
	@include('inc.navbar')
	@include('inc.banner')
@endsection

@section('content')
	<div class="main contact">
		<div class="comment-container">
			<p class="comment">Got feedback? Feel free to shoot me an email below!</p>
		</div>

		<div>
			{{Form::open(['action' => 'PagesController@email', 'method' => 'POST', 'enctype'=> 'multipart/data', 'class' => 'content']) }}

				{{ csrf_field() }}
				<p class="label">Name:</p>
				{{Form::text('name', '', ['placeholder' => 'Enter...'])}}

				<p class="label">Email:</p>
				{{Form::text('email', '', ['placeholder' => 'Enter...'])}}

				<p class="label">Subject:</p>
				{{Form::select('subject', ['feedback' => 'Feedback', 'questions' => 'Questions', 'business' => 'Business'])}}

				<p class="label">Message:</p>
				{{Form::textarea('message', '', ['id' => 'article-ckeditor', 'placeholder' => ''])}}

				<br>
				<div class="submit-btn-container">
					{{Form::submit('Submit', ['class' => 'btn btn-dark'])}}
				</div>

			{{Form::close()}}
		</div>
	</div>
@endsection