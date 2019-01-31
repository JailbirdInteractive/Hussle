

<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Hussle</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/colors/blue.css">


</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="\"><img src="/images/h-logo.png" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">

						<li><a href="#">Home</a>
							<ul class="dropdown-nav">
								<li><a href="\">Home</a></li>
								
							</ul>
						</li>

						<li><a href="#">Find Work</a>
							<ul class="dropdown-nav">
								<li><a href="#">Browse Jobs</a>
									<ul class="dropdown-nav">
									
										<li><a href="/jobs">All Jobs</a></li>
									</ul>
								</li>
								<li><a href="#">Browse Tasks</a>
									<ul class="dropdown-nav">
										{{-- <li><a href="tasks-list-layout-1.html">List Layout 1</a></li>
										<li><a href="tasks-list-layout-2.html">List Layout 2</a></li>
										<li><a href="tasks-grid-layout.html">Grid Layout</a></li>
										<li><a href="tasks-grid-layout-full-page.html">Full Page Grid</a></li> --}}
									</ul>
								</li>
								{{-- <li><a href="browse-companies.html">Browse Companies</a></li>
								<li><a href="/jobpage">Job Page</a></li>
								<li><a href="single-task-page.html">Task Page</a></li>
								<li><a href="single-company-profile.html">Company Profile</a></li> --}}
							</ul>
						</li>

						<li><a href="#">For Employers</a>
							<ul class="dropdown-nav">
								<li><a href="#">Find a Freelancer</a>
									<ul class="dropdown-nav">
										{{-- <li><a href="freelancers-grid-layout-full-page.html">Full Page Grid</a></li>
										<li><a href="freelancers-grid-layout.html">Grid Layout</a></li>
										<li><a href="freelancers-list-layout-1.html">List Layout 1</a></li>
										<li><a href="freelancers-list-layout-2.html">List Layout 2</a></li> --}}
									</ul>
								</li>
								
								@if(Auth::check())
								<li><a href="users/{{Auth::user()->id}}/edit">Freelancer Profile</a></li>
								<li><a href="/jobs/create">Post a Job</a></li>
								@else
								<li><a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button">Post a Job</a></li>
								@endif
								<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
							</ul>
						</li>

						<li><a href="#">Dashboard</a>
							<ul class="dropdown-nav">
								<li><a href="dashboard.html">Dashboard</a></li>
								<li><a href="dashboard-messages.html">Messages</a></li>
								<li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
								<li><a href="dashboard-reviews.html">Reviews</a></li>
								<li><a href="#">Jobs</a>
									<ul class="dropdown-nav">
										<li><a href="/jobs">Manage Jobs</a></li>
										<li><a href="dashboard-manage-candidates.html">Manage Candidates</a></li>
										@if(Auth::check())
								<li><a href="/jobs/create">Post a Job</a></li>
								@else
								<li><a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button">Post a Job</a></li>
								@endif
									</ul>
								</li>
								<li><a href="dashboard-manage-tasks.html">Tasks</a>
									<ul class="dropdown-nav">
										<li><a href="dashboard-manage-tasks.html">Manage Tasks</a></li>
										<li><a href="dashboard-manage-bidders.html">Manage Bidders</a></li>
										<li><a href="dashboard-my-active-bids.html">My Active Bids</a></li>
										<li><a href="dashboard-post-a-task.html">Post a Task</a></li>
									</ul>
								</li>
								<li><a href="dashboard-settings.html">Settings</a></li>
							</ul>
						</li>

						<li><a href="#" class="current">Pages</a>
							<ul class="dropdown-nav">
								<li><a href="pages-blog.html">Blog</a></li>
								<li><a href="pages-pricing-plans.html">Pricing Plans</a></li>
								<li><a href="pages-checkout-page.html">Checkout Page</a></li>
								<li><a href="pages-invoice-template.html">Invoice Template</a></li>
								<li><a href="pages-user-interface-elements.html">User Interface Elements</a></li>
								<li><a href="pages-icons-cheatsheet.html">Icons Cheatsheet</a></li>
								<li><a href="pages-login.html">Login & Register</a></li>
								<li><a href="pages-404.html">404 Page</a></li>
								<li><a href="pages-contact.html">Contact</a></li>
							</ul>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
                <!-- Main Navigation / End -->
                
			</div>
			<!-- Left Side Content / End -->
	<!-- Right Side Content / End -->

	<div class="right-side">
			@if (Auth::check()) 
			<div class="header-widget">

					<!-- Messages -->
					<div class="header-notifications user-menu">
						<div class="header-notifications-trigger">
							<a href="#"><div class="user-avatar status-online"><img src="/images/user-avatar-small-01.jpg" alt=""></div></a>
						</div>
							<!-- Dropdown -->
							<div class="header-notifications-dropdown">

									<!-- User Status -->
									<div class="user-status">
		
										<!-- User Name / Avatar -->
										<div class="user-details">
											<div class="user-avatar status-online"><img src="/images/user-avatar-small-01.jpg" alt=""></div>
											<div class="user-name">
													{{ Auth::user()->name }} <span>{{Auth::user()->account_type}}</span>
											</div>
										</div>
		
										<!-- User Status Switcher -->
										<div class="status-switch" id="snackbar-user-status">
											<label class="user-online current-status">Online</label>
											<label class="user-invisible">Invisible</label>
											<!-- Status Indicator -->
											<span class="status-indicator" aria-hidden="true"></span>
										</div>
								</div>
		
								<ul class="user-menu-small-nav">
									<li><a href="/settings"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
									<li><a href="/users/{{Auth::user()->id}}/edit"><i class="icon-material-outline-settings"></i> Settings</a></li>
									<li><a href="{{ route('logout') }}"
										onclick="event.preventDefault();
													  document.getElementById('logout-form').submit();"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
								</ul>
		
								</div>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
							</div>
		
						</div>
					{{-- <!-- User Status -->
					<div class="user-status">

			<!-- User Name / Avatar -->

				<div class="user-details">
						<div class="user-avatar status-online"><img src="images/user-avatar-small-01.jpg" alt=""></div>
						<div class="user-name">
								{{ Auth::user()->name }} <span>Freelancer</span>
						</div>
					</div>

					<!-- User Status Switcher -->
					<div class="status-switch" id="snackbar-user-status">
						<label class="user-online current-status">Online</label>
						<label class="user-invisible">Invisible</label>
						<!-- Status Indicator -->
						<span class="status-indicator" aria-hidden="true"></span>
					</div>
			</div>

			<ul class="user-menu-small-nav">
				<li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
				<li><a href="dashboard-settings.html"><i class="icon-material-outline-settings"></i> Settings</a></li>
				<li><a href="{{ route('logout') }}"
					onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
					<i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
			</ul>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form> --}}
			</div>
		</div>
		</div>
	</div>
	</div>
	@else
		<div class="header-widget">
			<a href="#sign-in-dialog" class="popup-with-zoom-anim log-in-button"><i class="icon-feather-log-in"></i> <span>Log In / Register</span></a>
		</div>
	@endif
		


				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


</div>
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

		<!--Tabs -->
		<div class="sign-in-form">
	
			<ul class="popup-tabs-nav">
				<li><a href="#login">Log In</a></li>
				<li><a href="#register">Register</a></li>
			</ul>
	
			<div class="popup-tabs-container">
	
				<!-- Login -->
				<div class="popup-tab-content" id="login">
					
					<!-- Welcome Text -->
					<div class="welcome-text">
						<h3>We're glad to see you again!</h3>
						<span>Don't have an account? <a href="#" class="register-tab">Sign Up!</a></span>
					</div>
						
					<!-- Form -->
					<form method="POST" action="{{ route('login') }}" id="login-form" name="login-form">
							@csrf
					<div class="input-with-icon-left">
							<i class="icon-material-baseline-mail-outline"></i>
							<input type="text" class="input-text with-border"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Email Address"  value="{{ old('email') }}" required autofocus/>
					
							@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
						</div>
	
						<div class="input-with-icon-left">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" required/>
						
							@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
						</div>
						@if (Route::has('password.request'))
						<a class="forgot-password" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
					@endif
					</form>
					
					<!-- Button -->
					<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
					
					<!-- Social Login -->
					<div class="social-login-separator"><span>or</span></div>
					<div class="social-login-buttons">
						<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
						<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
					</div>
	
				</div>
	
				<!-- Register -->
				<div class="popup-tab-content" id="register">
					
					<!-- Welcome Text -->
					<div class="welcome-text">
						<h3>Let's create your account!</h3>
					</div>
	
					<!-- Account Type -->
				<!-- Form -->
				<form method="POST" action="{{ route('register') }}" id="register-form">
					<div class="account-type">
						<div>
							<input type="radio" name="account_type" id="freelancer-radio" class="account-type-radio" value="Freelancer" checked/>
							<label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
						</div>
	
						<div>
							<input type="radio" name="account_type" id="employer-radio" class="account-type-radio" value="Employer"/>
							<label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
						</div>
					</div>
						
					
							@csrf
							<div class="input-with-icon-left">
									<i class="icon-material-outline-face"></i>
									<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="User Name"required autofocus>
	
									@if ($errors->has('name'))
										<span class="invalid-feedback" role="alert">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>

							<div class="input-with-icon-left">
							<i class="icon-material-baseline-mail-outline"></i>
							<input type="text" class="input-text with-border"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email Address" required/>
						
							@if ($errors->has('email'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
						</div>
	
						<div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" required/>
							@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
						</div>
	
						<div class="input-with-icon-left">
							<i class="icon-material-outline-lock"></i>
							<input type="password" class="input-text with-border" name="password_confirmation"  id="password-confirm" placeholder="Repeat Password" required/>
						</div>
					</form>
					
					<!-- Button -->
					<button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-form">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
					
					<!-- Social Login -->
					<div class="social-login-separator"><span>or</span></div>
					<div class="social-login-buttons">
						<button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via Facebook</button>
						<button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via Google+</button>
					</div>
	
				</div>
	
			</div>
		</div>
	</div>
<!-- Scripts
================================================== -->
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/js/mmenu.min.js"></script>
<script src="/js/tippy.all.min.js"></script>
<script src="/js/simplebar.min.js"></script>
<script src="/js/bootstrap-slider.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/snackbar.js"></script>
<script src="/js/clipboard.min.js"></script>
<script src="/js/counterup.min.js"></script>
<script src="/js/magnific-popup.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>

