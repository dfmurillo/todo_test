<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') - {{$name}}</title>
</head>
<body>
	<div class="app-container" @yield('ng-app')>
		@yield('content')
	</div>

	<script src="{{URL::asset('js/angular.min.js')}}"></script>
	<script>angular.module("App").constant("CSRF_TOKEN", '{!! csrf_token() !!}');</script>
	@yield('js-assets')
</body>
</html>