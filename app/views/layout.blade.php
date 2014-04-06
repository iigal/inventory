<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html>
		<head>
		<title>Laravel Authentication Demo</title>
		
		</head>
		<body>
		<div id="container">
		<div id="nav">
		 <ul>
		<li>{{ link_to_route('home', 'Home') }}</li>
		@if(Auth::check())
			<li>{{ link_to_route('profile', 'Profile' ) }}</li>
			<li>{{ link_to_route('logout', 'Logout ('.Auth::user()->username.')') }}</li>
			@else
			<li>{{ link_to_route('login', 'Login', $parameters = array(), $attributes = array());}}</li>
			@endif
			</ul>
			</div><!-- end nav -->

			<!-- check for flash notification message -->
			@if(Session::has('flash_notice'))
					<div id="flash_notice">{{ Session::get('flash_notice') }}</div>
							@endif

							@yield('content')
							</div><!-- end container -->
</body>
</html>
