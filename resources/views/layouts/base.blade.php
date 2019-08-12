<!DOCTYPE html>
<html>
<head>
		<!--Import Google Icon Font-->
	    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	    <!--Import materialize.css-->
	    <!-- <link rel="stylesheet" href="{{ URL::asset('/css/materialize.min.css') }}"> -->
		<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">


	    <!--Let browser know website is optimized for mobile-->
	    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->

		<title>{{ config('app.name', 'Error') }}</title>
	</head>
	<body>
		<div class="wrapper">
			@include('inc.navbar')
			@yield('content')
			@include('inc.footer')
		</div>

	    <!-- <script src="{{ URL::asset('js/materialize.min.js') }}"></script> -->
	</body>
</html>