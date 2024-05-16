

<!-- Header Start-->
<header class="header">
		<div class="header-inner">
			<nav class="navbar navbar-expand-lg bg-barren barren-head navbar fixed-top justify-content-sm-start pt-0 pb-0">
				<div class="container">	
					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
						<span class="navbar-toggler-icon">
							<i class="fa-solid fa-bars"></i>
						</span>
					</button>
					<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 me-auto" href="{{url('/')}}">
						<div class="res-main-logo">
							<img src="{{asset('assets/images/logo-icon.svg')}}" alt="">
						</div>
						<div class="main-logo" id="logo">
							<img src="{{asset('assets/images/logo.svg')}}" alt="">
							<img class="logo-inverse" src="{{asset('assets/images/dark-logo.svg')}}" alt="">
						</div>
					</a>
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
						<div class="offcanvas-header">
							<div class="offcanvas-logo" id="offcanvasNavbarLabel">
								<img src="{{asset('assets/images/logo-icon.svg')}}" alt="">
							</div>
							<button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
								<i class="fa-solid fa-xmark"></i>
							</button>
						</div>
						<div class="offcanvas-body">
							<div class="offcanvas-top-area">
								<div class="create-bg">
									<a href="create.html" class="offcanvas-create-btn">
										<i class="fa-solid fa-calendar-days"></i>
										<span>Create Event</span>
									</a>
								</div>
							</div>							
							<ul class="navbar-nav justify-content-end flex-grow-1 pe_5">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Explore Events
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="{{url('/explore_events')}}">Explore Events</a></li>
										<li><a class="dropdown-item" href="{{url('/venue_event_detail_view')}}">Venue Event Detail View</a></li>
										<li><a class="dropdown-item" href="{{url('/online_event_detail_view')}}">Online Event Detail View</a></li>
									</ul>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link" href="pricing.html">Pricing</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Blog
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li><a class="dropdown-item" href="our_blog.html">Our Blog</a></li>
										<li><a class="dropdown-item" href="blog_detail_view.html">Blog Detail View</a></li>
									</ul> -->
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Help
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<!-- <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
										<li><a class="dropdown-item" href="help_center.html">Help Center</a></li> -->
										<li><a class="dropdown-item" href="{{url('/contact_us')}}">Contact Us</a></li>
										<li><a class="dropdown-item" href="{{url('/about_us')}}">About Us</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Pages
									</a>
									<ul class="dropdown-menu dropdown-submenu">
										<li>
											<a class="dropdown-item submenu-item" href="#">Other Pages</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="{{url('/sign_in')}}">Sign In</a></li>
												<li><a class="dropdown-item pe-5" href="{{url('/sign_up')}}">Sign Up</a></li>
												<li><a class="dropdown-item pe-5" href="{{url('/forgot_password')}}">Forgot Password</a></li>
												<li><a class="dropdown-item pe-5" href="{{url('/about_us')}}">About Us</a></li>
												<!-- <li><a class="dropdown-item pe-5" href="checkout.html">Checkout</a></li>
												<li><a class="dropdown-item pe-5" href="invoice.html">Invoice</a></li> -->
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="{{url('/contact_us')}}">Create Event</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="{{url('/contact_us')}}">Create</a></li>
												<!-- <li><a class="dropdown-item pe-5" href="create_venue_event.html">Create Venue Event</a></li>
												<li><a class="dropdown-item pe-5" href="create_online_event.html">Create Online Event</a></li> -->
											</ul>
										</li>
										<li>
											<a class="dropdown-item submenu-item" href="#">Events View</a>
											<ul class="submenu dropdown-menu">
												<li><a class="dropdown-item pe-5" href="{{url('/online_event_detail_view')}}">Online Event Detail View</a></li>
												<li><a class="dropdown-item pe-5" href="{{url('/venue_event_detail_view')}}">Venue Event Detail View</a></li>
											</ul>
										</li>
										<!-- <li><a class="dropdown-item" href="booking_confirmed.html">Booking Confirmed</a></li> -->
									</ul>
								</li>
							</ul>
						</div>
						<div class="offcanvas-footer">
							<!-- <div class="offcanvas-social">
								<h5>Follow Us</h5>
								<ul class="social-links">
									<li><a href="#" class="social-link"><i class="fab fa-facebook-square"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
									<li><a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
								</ul>
							</div> -->
						</div>
					</div>
					<div class="right-header order-2">
						<ul class="align-self-stretch">
							<li>
								<a href="{{url('/contact_us')}}" class="create-btn btn-hover">
									<i class="fa-solid fa-calendar-days"></i>
									<span>Create Event</span>
								</a>
							</li>
							<li class="dropdown account-dropdown">
								<a href="#" class="account-link" role="button" id="accountClick" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{asset('assets/images/profile-imgs/img-13.jpg')}}" alt="">
									<i class="fas fa-caret-down arrow-icon"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-account dropdown-menu-end" aria-labelledby="accountClick">
									<li>
										<div class="dropdown-account-header">
											<div class="account-holder-avatar">
												<img src="{{asset('assets/images/profile-imgs/img-13.jpg')}}" alt="">
											</div>
											<h5>John Doe</h5>
											<p>johndoe@example.com</p>
										</div>
									</li>
									
									<li class="profile-link">
										<!-- <a href="my_organisation_dashboard.html" class="link-item">My Organisation</a> -->							
										<a href="{{url('/sign_in')}}" class="link-item">Sign Out</a>									
									</li>
								</ul>
							</li>
							<li>
								<div class="night_mode_switch__btn">
									<div id="night-mode" class="fas fa-moon fa-sun"></div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="overlay"></div>
		</div>
</header>
<!-- Header End-->