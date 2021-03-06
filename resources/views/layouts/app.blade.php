<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<title>Discipline Tracker</title>
	</head>
	<body>
		@include('common.navbar')
		@if (Session::has('success'))
			<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>	