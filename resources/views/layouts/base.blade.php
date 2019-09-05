<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300" rel="stylesheet">


		<title>{{ config('app.name', 'Error') }}</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="inner-wrap">
				<div class="nav-wrapper">
					@include('inc.navbar')
					@include('inc.banner')
				</div>
				@include('inc.messages')
				@yield('content')
				@include('inc.footer')
			</div>
		</div>

		<script rel="javascript" src="{{ URL::asset('/js/script.js') }}"></script>

		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace( 'article-ckeditor' );
    	</script>
	</body>
</html>