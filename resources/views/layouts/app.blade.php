<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Advanced Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<nav class="nav has-shadow">
			<div class="container">
				<div class="nav-left">
					<a class="nav-item" href="{{ route('home') }}">
						<img src="{{asset('images/devmarketer-logo.png')}}" alt="Advanced Blog">
					</a>
					<div class="nav-item is-tab is-hidden-mobile">

					</div>
				</div>

				<div class="nav-right">

				</div>
			</div>
		</nav>
		@yield('content')

	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
