@extends('layouts.base')

@section('content')
	<div class="main">
		<a href="/projects" class="btn btn-outline-primary">Go Back</a>
		<h1>{{$post->title}}</h1>
		<small>{{$post->date}}</small>
		<p>{!!$post->body!!}</p>
		<a href="/projects/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
		{{Form::open(['action' => ['ProjectPostsController@destroy', $post->id], 'method' => 'POST'])}}
			{{Form::hidden('_method', 'DELETE')}}
			{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
		{{Form::close()}}
	</div>
@endsection