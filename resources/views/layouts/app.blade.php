<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link href="{{ asset('menu/styles/style.css') }}" rel="stylesheet">

	<title>Stock-App</title>
</head>
<body>


@include('home.sidebar')

<!-- CONTENT -->
	<section id="content">

		@include('home.nav')

	@include('home.main')
	</section>
	<!-- CONTENT -->
@include('home.js.script')

</body>
</html>
