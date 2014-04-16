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
	<title>Inventory Management</title>
	
</head>
<body>
<<<<<<< HEAD
	<div class="container">
		<!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'Inventory Management', $parameters = array(), $attributes = array('class'=>"navbar-brand"));}}
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

	
				
				@if(Auth::check())				
				{{-- ********show this if the user is superadmin******** --}}				
				@if(Auth::user()->roles === "superadmin")

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Groups <b class="caret"></b></a>
						<ul class="dropdown-menu">
		                  <li>{{ HTML::link('groups/create', 'Create' ) }}</li>
		                  <li>{{ HTML::link('groups/', 'Show' ) }}</li>
		                  <li class="divider"></li>
		                  <li class="dropdown-header">View</li>
		                  <li><a href="#">view more</a></li>
                		</ul>
                	</li>
                @elseif(Auth::user()->roles === "admin")
                	<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Items <b class="caret"></b></a>
						<ul class="dropdown-menu">
		                  <li>{{ HTML::link('items/create', 'Create' ) }}</li>
		                  <li>{{ HTML::link('items/', 'Show' ) }}</li>
		                  <li class="divider"></li>
		                  <li class="dropdown-header">View</li>
		                  <li><a href="#">view more</a></li>
                		</ul>
                	</li>

				
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
             
                         
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
              
			
		@yield('content')
	</div>
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js  ') }} 

  </body>
</html>