<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guestbook</title>
	<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</body>
</html>