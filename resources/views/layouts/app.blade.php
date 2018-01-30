<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TrippleA</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		
	
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image {{ config('app.name', 'UICLab') }}-->
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        TrippleA
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        
						@auth
						
						
                            <li class="dropdown">
                                <a href="/customers" class="{{Request::is('request')?'active':''}} dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Customers<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu list-group" role="menu">
                                    <a href="#" class="list-group-item">Sales Orders</a>
                                    <a href="#" class="list-group-item">Receive Payments</a>
                                    <a href="#" class="list-group-item">Create Invoices</a>
                                    <a href="#" class="list-group-item" data-toggle="modal"  data-target="#createSOA">Create Statements</a>	 <!--create statement of accounts-->														
                                </ul>
							</li>
							
                            <li class="dropdown">
                                <a href="/vendors" class="{{Request::is('experiment')?'active':''}} dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Vendors<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/cpo">Create Purchase Orders</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="/banking" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Banking<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="/md">Make Deposits</a></li>
                                </ul>
                            </li>
                            <li><a href="/analytics">Analytics</a></li>
                            <li><a href="/reports">Reports</a></li>
                            <li><a href="/contact">Contact</a></li>
                        @endauth
									
											
                    </ul>
					
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!--<li><a href="{{ route('register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">API Documentation</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
				
				
				
				
				
				
            </div>
        </nav>
		@yield('content')
        @yield('modal_boxes')
    </div>
 <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
