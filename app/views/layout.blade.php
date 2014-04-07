<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Shashank Shree Neupane">
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/cover.css') }}
	<title>Inventory Management</title>
	
</head>
<body>
	<div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Inventory</h3>
              <ul class="nav masthead-nav"> 
				<li>{{ link_to_route('home', 'Home') }}</li>
				
				@if(Auth::check())
				
				{{-- ********show this if the user is superadmin******** --}}
				
				@if(Auth::user()->roles === "superadmin")
					<li>Add Groups</li>
				@endif
				
					<li>{{ HTML::link('profile', 'Profile' ) }}</li>
					<li>{{ link_to_route('logout', 'Logout ('.Auth::user()->username.')') }}</li>
				@else
					<li>{{ link_to_route('login', 'Login', $parameters = array(), $attributes = array());}}</li>
				@endif
			</ul>
            </div>
          </div>

		<!-- check for flash notification message -->
		@if(Session::has('flash_notice'))
		<div id="flash_notice">{{ Session::get('flash_notice') }}</div>
				@endif

				
				
		<div class="inner cover">
            <h1 class="cover-heading">Cover your page.</h1>
            <p class="lead">@yield('content')</p>
            <p class="lead">
              <a href="#" class="btn btn-lg btn-default">Learn more</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">
              An inventory management done in a beautiful way ;) .
            </div>
          </div>

        </div>

      </div>

    </div>
  
  </body>
</html>