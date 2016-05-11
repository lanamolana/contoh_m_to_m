<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	@section("title-website")
		Framework
	@show
	</title>

	@section("stylesheet")
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      border-radius: 0;
    }
    </style>
	@show

</head>
<body>
	<div class="container">
		@section("header")
			<h1>Perpustakaan Universitas Antah-berantah</h1>
		@show
	</div>

	@section("navigation")
		@include("template.nav")
	@show

	<div class="container">
		@section("layout")
		
		@show
	
		<div class="text-center">
			@section("footer")
				Copyright &copy; {{ date("Y") }} by Slamet Maulana Yusuf. All Right Reserved.
			@show	
		</div>
	</div>
	

	@section("javascript")
	<script type="text/javascript" src="{{ asset('jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
	@show
</body>
</html>