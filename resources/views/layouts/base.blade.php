<!DOCTYPE html>
<html>
<head>
		<!--Import Google Icon Font-->
	    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	    <!--Import materialize.css-->
	    <!-- <link rel="stylesheet" href="{{ URL::asset('/css/materialize.min.css') }}"> -->
		<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



	    <!--Let browser know website is optimized for mobile-->
	    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

		<title>{{ config('app.name', 'Error') }}</title>
	</head>
	<body>
		<div class="wrapper">
			@include('inc.navbar')
			@include('inc.messages')
			@yield('content')
			@include('inc.footer')
		</div>

		<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
		<script>
			CKEDITOR.replace( 'article-ckeditor' );
    	</script>

	    <!-- <script src="{{ URL::asset('js/materialize.min.js') }}"></script> -->
	</body>
</html>