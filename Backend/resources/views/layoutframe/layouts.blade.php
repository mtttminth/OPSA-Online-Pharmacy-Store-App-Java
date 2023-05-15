<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>

		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- CSRF Token -->
    	<meta name="csrf-token" content="{{ csrf_token() }}">
    	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

		<!-- dropdown  -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

		<!-- Custom styles for this template -->
    	<link href="{{asset('template/css/custom.css')}}" rel="stylesheet">

    	<!-- for notification bells -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	
    	<title>OMOA-Online Medicine Ordering App</title>
		<link rel="icon" href="template/img/items/omoalogo.png" sizes="36x36" type="template/img/items/omoalogo.png">
		
	</head>
	<body>
		<!-- navbar -->
		@include('temp.navbar')
		@include('temp.flash-message')
		<!-- layout body -->	
		<div class="col-lg-10 container" id="main">
			@yield('content')
		</div>    
   		@stack('script')	
	</body>
</html>