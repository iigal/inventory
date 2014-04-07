<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
		<html>
		<head>
		{{ HTML::style('css/bootstrap.min.css') }}
		<title>Inventory Management</title>
		
		</head>
		<body>
		<div id="container">
		<nav class="navbar navbar-default" role="navigation">
	  	<div class="navbar-inner">
	    	<div class="container">
				<ul class="nav navbar-nav">  
					<li>{{ link_to_route('home', 'Home') }}</li>
					@if(Auth::check())
					<li>{{ HTML::link('profile', 'Profile' ) }}</li>
					<li>{{ link_to_route('logout', 'Logout ('.Auth::user()->username.')') }}</li>
						@else
					<li>{{ link_to_route('login', 'Login', $parameters = array(), $attributes = array());}}</li>
						@endif
				</ul>
			</div><!-- end nav -->
			</div>
			</nav>

			<!-- check for flash notification message -->
			@if(Session::has('flash_notice'))
					<div id="flash_notice">{{ Session::get('flash_notice') }}</div>
							@endif

							@yield('content')
							
							
							</div><!-- end container -->
</body>
</html>
