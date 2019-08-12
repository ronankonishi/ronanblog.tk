<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
	    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <!--Import materialize.css-->
	    <link rel="stylesheet" href="{{ URL::asset('/css/materialize.min.css') }}">

	    <!--Let browser know website is optimized for mobile-->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<title>{{ config('app.name', 'Error') }}</title>
	</head>
	<body>
		@yield('content')

		<script>
		  $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal').modal();
		  });
		 </script>
		
	    <script src="{{ URL::asset('js/materialize.min.js') }}"></script>
	</body>
</html>