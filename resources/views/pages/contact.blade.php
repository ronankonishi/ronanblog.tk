@extends('layouts.base')

@section('content')
	<div class="main contact">
		<p>Got some feedback about my website? Feel free to shoot me an email below!</p>

		<div>

			{{Form::open(['action' => 'PagesController@email', 'method' => 'POST', 'enctype'=> 'multipart/data', 'class' => 'content']) }}

				{{ csrf_field() }}
				<p class="label">Name:</p>
				{{Form::text('title', '', ['placeholder' => 'Enter...'])}}

				<p class="label">Email:</p>
				{{Form::text('title', '', ['placeholder' => 'Enter...'])}}

				<p class="label">Subject:</p>
				{{Form::select('options', ['opt1' => 'Opt1', 'opt2' => 'Opt2'])}}

				<p class="label">Message:</p>
				{{Form::textarea('body', '', ['id' => 'article-ckeditor', 'placeholder' => ''])}}

				<p class="label">Attachment:</p>
				{{Form::file('file')}}

				<br>
				<div class="submit-btn-container">
					{{Form::submit('Submit', ['class' => 'submit-btn'])}}
				</div>

			{{Form::close()}}

		</div>
	</div>
@endsection