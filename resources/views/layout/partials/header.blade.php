<?php error_reporting(0);?>
<!-- Main Wrapper -->
<div class="main-wrapper">
<!-- Header -->

			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{ route('home') }}" class="navbar-brand logo">
							<img src="{{ asset("/assets/img/logo.png") }}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{ route('home') }}" class="menu-logo">
								<img src="{{ asset("/assets/img/logo.png")}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>

						<ul class="main-nav">
							<li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="{{ route('home') }}">Home</a>
							</li>
							<!--<li class="has-submenu <?php if($page=="dashboard" || $page=="manage-projects"  || $page=="developer"  || $page=="developer-details" || $page=="favourites" || $page=="membership-plans" || $page=="milestones" || $page=="chats" || $page=="review" || $page=="deposit-funds" || $page=="verify-identity" || $page=="profile-settings") { echo 'active'; } ?>">-->
							<!--	<a href="">For Employers<i class="fas fa-chevron-down"></i></a>-->
							<!--	<ul class="submenu">-->
							<!--		<li class="has-submenu <?php if($page=="developer"  || $page=="developer-details") { echo 'active'; } ?>">-->
							<!--			<a href="#">Freelancer</a>-->
							<!--			<ul class="submenu">-->
							<!--				<li class="<?php if($page=="developer") { echo 'active'; } ?>"><a href="developer">Freelancer</a></li>-->
							<!--				<li class="<?php if($page=="developer-details") { echo 'active'; } ?>"><a href="developer-details">Freelancer Details</a></li>-->
							<!--			</ul>-->
							<!--		</li>-->
							<!--		<li class="<?php if($page=="dashboard") { echo 'active'; } ?>"><a href="dashboard">Dashboard</a></li>-->
							<!--		<li class="<?php if($page=="manage-projects") { echo 'active'; } ?>"><a href="manage-projects">Projects</a></li>-->
							<!--		<li class="<?php if($page=="favourites") { echo 'active'; } ?>"><a href="favourites">Favourites</a></li>-->
							<!--		<li class="<?php if($page=="membership-plans") { echo 'active'; } ?>"><a href="membership-plans">Membership</a></li>-->
							<!--		<li class="<?php if($page=="milestones") { echo 'active'; } ?>"><a href="milestones">Milestones</a></li>-->
							<!--		<li class="<?php if($page=="chats") { echo 'active'; } ?>"><a href="chats">Chats</a></li>-->
							<!--		<li class="<?php if($page=="review") { echo 'active'; } ?>"><a href="review">Review</a></li>-->
							<!--		<li class="<?php if($page=="deposit-funds") { echo 'active'; } ?>"><a href="{{ route('employer.deposit-funds') }}">Payments</a></li>-->
							<!--		<li class="<?php if($page=="verify-identity") { echo 'active'; } ?>"><a href="verify-identity">Verify Identity</a></li>-->
							<!--		<li class="<?php if($page=="profile-settings") { echo 'active'; } ?>"><a href="profile-settings">Settings</a></li>-->
							<!--	</ul>-->
							<!--</li>-->
							<!--@if(!Route::is(['freelancer-portfolio']))-->
							<!--<li class="has-submenu <?php if($page=="project" || $page=="project-details"  || $page=="freelancer-dashboard"  || $page=="freelancer-project-proposals" || $page=="freelancer-favourites" || $page=="freelancer-membership" || $page=="freelancer-change-password" || $page=="freelancer-chats" || $page=="freelancer-review" || $page=="freelancer-withdraw-money" || $page=="freelancer-verify-identity" || $page=="freelancer-profile-settings" || $page=="freelancer-portfolio" || $page=="freelancer-profile") { echo 'active'; } ?>">-->
							<!--	<a href="">For Designers<i class="fas fa-chevron-down"></i></a>-->
							<!--	<ul class="submenu">-->
							<!--		<li class="has-submenu <?php if($page=="project"  || $page=="project-details") { echo 'active'; } ?>">-->
							<!--			<a href="#">Projects</a>-->
							<!--			<ul class="submenu">-->
							<!--				<li class="<?php if($page=="project") { echo 'active'; } ?>"><a href="project">Projects</a></li>-->
							<!--				<li class="<?php if($page=="project-details") { echo 'active'; } ?>"><a href="project-details">Project Details</a></li>-->
							<!--			</ul>-->
							<!--		</li>-->
							<!--		<li class="<?php if($page=="freelancer-dashboard") { echo 'active'; } ?>"><a href="freelancer-dashboard">Dashboard</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-project-proposals") { echo 'active'; } ?>"><a href="{{ route('designer.projects') }}">Projects</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-favourites") { echo 'active'; } ?>"><a href="{{ route('designer.favourites') }}">Favourites</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-membership") { echo 'active'; } ?>"><a href="freelancer-membership">Membership</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-change-password") { echo 'active'; } ?>"><a href="freelancer-change-password">Change Password</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-chats") { echo 'active'; } ?>"><a href="{{ route('designer.chats') }}">Chats</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-review") { echo 'active'; } ?>"><a href="{{ route('designer.review') }}">Review</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-withdraw-money") { echo 'active'; } ?>"><a href="{{ route('designer.withdraw_payment') }}">Payments</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-verify-identity") { echo 'active'; } ?>"><a href="freelancer-verify-identity">Verify Identity</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-profile-settings") { echo 'active'; } ?>"><a href="{{ route('designer.profile-settings') }}">Settings</a></li>-->
							<!--	</ul>-->
							<!--</li>-->
							<!--@endif-->
							<!--@if(Route::is(['freelancer-portfolio']))-->
							<!--<li class="has-submenu <?php if($page=="project" || $page=="project-details"  || $page=="freelancer-dashboard"  || $page=="freelancer-project-proposals" || $page=="freelancer-favourites" || $page=="freelancer-membership" || $page=="freelancer-change-password" || $page=="freelancer-chats" || $page=="freelancer-review" || $page=="freelancer-withdraw-money" || $page=="freelancer-verify-identity" || $page=="freelancer-profile-settings" || $page=="freelancer-portfolio") { echo 'active'; } ?>">-->
							<!--	<a href="">For Designers<i class="fas fa-chevron-down"></i></a>-->
							<!--	<ul class="submenu">-->
							<!--		<li class="has-submenu <?php if($page=="project"  || $page=="project-details") { echo 'active'; } ?>">-->
							<!--			<a href="#">Projects</a>-->
							<!--			<ul class="submenu">-->
							<!--				<li class="<?php if($page=="project") { echo 'active'; } ?>"><a href="project">Projects</a></li>-->
							<!--				<li class="<?php if($page=="project-details") { echo 'active'; } ?>"><a href="project-details">Project Details</a></li>-->
							<!--			</ul>-->
							<!--		</li>-->
							<!--		<li class="<?php if($page=="freelancer-dashboard") { echo 'active'; } ?>"><a href="freelancer-dashboard">Dashboard</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-project-proposals") { echo 'active'; } ?>"><a href="{{ route('designer.projects') }}">Projects</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-favourites") { echo 'active'; } ?>"><a href="{{ route('designer.favourites') }}">Favourites</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-membership") { echo 'active'; } ?>"><a href="freelancer-membership">Membership</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-change-password") { echo 'active'; } ?>"><a href="freelancer-change-password">Change Password</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-chats") { echo 'active'; } ?>"><a href="{{ route('designer.chats') }}">Chats</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-review") { echo 'active'; } ?>"><a href="{{ route('designer.review') }}">Review</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-portfolio") { echo 'active'; } ?>"><a href="freelancer-portfolio">Portfolio</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-withdraw-money") { echo 'active'; } ?>"><a href="{{ route('designer.withdraw_payment') }}">Payments</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-verify-identity") { echo 'active'; } ?>"><a href="freelancer-verify-identity">Verify Identity</a></li>-->
							<!--		<li class="<?php if($page=="freelancer-profile-settings") { echo 'active'; } ?>"><a href="{{ route('designer.profile-settings') }}">Settings</a></li>-->
							<!--	</ul>-->
							<!--</li>-->
							<!--@endif-->
							<!--<li class="has-submenu <?php if($page=="about" || $page=="blank-page"  || $page=="404-page"  || $page=="user-account-details" || $page=="login" || $page=="register" || $page=="forgot-password" || $page=="change-password"  || $page=="freelancer-invoices"  || $page=="view-invoice") { echo 'active'; } ?>">-->
							<!--	<a href="">Pages <i class="fas fa-chevron-down"></i></a>-->
							<!--	<ul class="submenu">-->
							<!--		<li class="<?php if($page=="about") { echo 'active'; } ?>"><a href="about">About us</a></li>-->
							<!--		<li class="<?php if($page=="blank-page") { echo 'active'; } ?>"><a href="blank-page">Starter Page</a></li>-->
							<!--		<li class="<?php if($page=="404-page") { echo 'active'; } ?>"><a href="404-page">404 Page</a></li>-->
							<!--		<li class="<?php if($page=="user-account-details") { echo 'active'; } ?>"><a href="user-account-details">User Details</a></li>-->
							<!--		<li class="has-submenu <?php if($page=="freelancer-invoices"  || $page=="view-invoice") { echo 'active'; } ?>">-->
							<!--			<a href="#">Invoices</a>-->
							<!--			<ul class="submenu">-->
							<!--				<li class="<?php if($page=="freelancer-invoices") { echo 'active'; } ?>"><a href="freelancer-invoices">Invoices</a></li>-->
							<!--				<li class="<?php if($page=="view-invoice") { echo 'active'; } ?>"><a href="view-invoice">Invoice View</a></li>-->
							<!--			</ul>-->
							<!--		</li>-->
							<!--		<li class="<?php if($page=="login") { echo 'active'; } ?>"><a href="/login">Login</a></li>-->
							<!--		<li class="<?php if($page=="register") { echo 'active'; } ?>"><a href="/register">Register</a></li>-->
							<!--		<li class="<?php if($page=="forgot-password") { echo 'active'; } ?>"><a href="forgot-password">Forgot Password</a></li>-->
							<!--		<li class="<?php if($page=="change-password") { echo 'active'; } ?>"><a href="change-password">Change Password</a></li>-->
							<!--	</ul>-->
							<!--</li>-->
							<!--<li class="has-submenu <?php if($page=="blog-list" || $page=="blog-grid"  || $page=="blog-details") { echo 'active'; } ?>">-->
							<!--	<a href="">Blog <i class="fas fa-chevron-down"></i></a>-->
							<!--	<ul class="submenu">-->
							<!--		<li class="<?php if($page=="blog-list") { echo 'active'; } ?>"><a href="blog-list">Blog List</a></li>-->
							<!--		<li class="<?php if($page=="blog-grid") { echo 'active'; } ?>"><a href="blog-grid">Blog Grid</a></li>-->
							<!--		<li class="<?php if($page=="blog-details") { echo 'active'; } ?>"><a href="blog-details">Blog Details</a></li>-->
							<!--	</ul>-->
							<!--</li>-->
							<li>
								<a href="{{ url('designer') }}">Designer</a>
							</li>
							<li>
								<a href="{{ url('project') }}">Project</a>
							</li>
							<li>
								<a href="{{ url('about') }}">About Us</a>
							</li>
							<li>
								<a href="{{ url('contact') }}">Contact</a>
							</li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">

                        @guest
                        <li><a href="/register" class="reg-btn"><i class="fas fa-user"></i> Register</a></li>
						<li><a href="/login" class="log-btn"><i class="fas fa-lock"></i> Login</a></li>
                        @endguest


                        @if(Auth::user()->role === 'admin')

                        <li class="nav-item main-drop account-item">
							<a href="{{ url('/admin/dashboard') }}" class=" nav-link">
								<span class="user-img">
									<img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('assets/img/img-04.jpg') }}" alt="">
								</span>
								<span>{{ Auth::user()->name }}</span>
							</a>
						</li>

                        @endif


                        @if(Auth::user()->role == 'buyer')
						<!-- /User Menu -->
						<li><a href="{{ route('employer.post-project') }}" class="login-btn">Post a Project </a></li>
                        @endif


                        @if(Auth::user()->role == 'buyer')

                        <li class="nav-item dropdown has-arrow main-drop account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('assets/img/img-04.jpg') }}" alt="">
								</span>
								<span>{{ Auth::user()->name }}</span>
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Account Details</div>
                                <a class="dropdown-item" href="{{ route('employer.dashboard') }}"><i class="fas fa-dashboard"></i>Dashboard</a>
								<a class="dropdown-item" href="{{ route('employer.profile') }}"><i class="material-icons">verified_user</i> View profile</a>
								<div class="drop-head">Projects Settings</div>
								<a class="dropdown-item" href="{{ route('employer.manage-projects')}}"><i class="material-icons">business_center</i> Projects</a>
								<a class="dropdown-item" href="favourites"><i class="material-icons">local_play</i> Favourites</a>
								<a class="dropdown-item" href="{{ route('employer.review') }}"><i class="material-icons">pie_chart</i> Reviews</a>
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="{{ route('employer.profile-settings')}}"> <i class="material-icons">settings</i> Profile Settings</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons">power_settings_new</i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                </form>
							</div>
						</li>

                        @endif


						@if(Auth::user()->role == 'seller')
						<li class="nav-item dropdown account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<span class="user-img">
									<img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('assets/img/img-04.jpg') }}" alt="">
								</span>
								<span>{{ Auth::user()->name }}</span>
							</a>
							<div class="dropdown-menu emp">
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="{{ url('designer/dashboard') }}"><i class="material-icons">wifi_tethering</i> Dashboard</a>
								<a class="dropdown-item" href="{{ url('designer/profile') }}"><i class="material-icons">verified_user</i> View profile</a>
								<div class="drop-head">Projects Settings</div>
								<a class="dropdown-item" href="{{ route('designer.projects') }}"><i class="material-icons">business_center</i> Projects</a>
								<a class="dropdown-item" href="freelancer-bookmarks"><i class="material-icons">local_play</i> Bookmarks</a>
								<a class="dropdown-item" href="{{ route('designer.review') }}"><i class="material-icons">pie_chart</i> Reviews</a>
								<div class="drop-head">Financial Settings</div>
								<a class="dropdown-item bal" href="#">Balance <span class="amt">₹0.00 INR</span></a>
								<a class="dropdown-item" href="{{ route('designer.withdraw_payment') }}"><i class="material-icons">wifi_tethering</i> Withdraw funds</a>
								<div class="drop-head">Account Details</div>
								<a class="dropdown-item" href="{{ route('designer.profile-settings') }}"> <i class="material-icons">settings</i> Profile Settings</a>
								<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="material-icons">power_settings_new</i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                </form>
							</div>
						</li>
						@endif



					</ul>
				</nav>
			</header>
			<!-- /Header -->
