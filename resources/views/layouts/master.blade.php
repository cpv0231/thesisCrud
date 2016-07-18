<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@yield('styles')
	<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/bootstrap.min.css') }}">
 <link rel="stylesheet" type="text/css" href="{{ URL::to('src/css/app.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body>

@include('partials.header')
<div class="container">
	 @yield('content')
</div>




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>