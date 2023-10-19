<!DOCTYPE html>
<html lang="en">
	<head>
		@include('web.layouts.partials.head')  
	</head>
<body>
	@include('web.layouts.partials.header')
		@yield('content')
	@include('web.layouts.partials.footer')

	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
		@include('web.layouts.partials.scripts')  
</body>
</html>
