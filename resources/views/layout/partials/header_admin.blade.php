	<!-- Main Wrapper -->
        <div class="main-wrapper">

			<!-- Header -->
			<div class="header">

				<!-- Logo -->
				<div class="header-left">
					<a href="{{ route('admin.dashboard') }}" class="logo">
						<img src="{{ asset("/assets/img/logo.png") }}" alt="Logo">
					</a>
					<a href="{{ route('admin.dashboard') }}" class="logo logo-small">
						<img src="{{ asset("/assets/img/logo.png") }}" alt="Logo" width="30" height="30">
					</a>
					<!-- Sidebar Toggle -->
					<a href="javascript:void(0);" id="toggle_btn">
						<i class="feather-chevrons-left"></i>
					</a>
					<!-- /Sidebar Toggle -->

					<!-- Mobile Menu Toggle -->
					<a class="mobile_btn" id="mobile_btn">
						<i class="feather-chevrons-left"></i>
					</a>
					<!-- /Mobile Menu Toggle -->
				</div>
				<!-- /Logo -->

				<!-- Search -->
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Start typing your Search...">
						<button class="btn" type="submit"><i class="feather-search"></i></button>
					</form>
				</div>
				<!-- /Search -->

				<!-- Header Menu -->
				<ul class="nav user-menu">

                    <li class="nav-item dropdown">
						<a href="{{ url('/') }}" class="nav-link">
							<i class="feather-home"></i>
						</a>

					</li>

					<!-- Notifications -->
					<li class="nav-item dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<i class="feather-bell"></i> <span class="badge badge-pill">5</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All</a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="" src="../assets_admin/img/profiles/avatar-02.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Brian Johnson</span> paid the invoice <span class="noti-title">#DF65485</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="" src="../assets_admin/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Marie Canales</span> has accepted your estimate <span class="noti-title">#GTR458789</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<div class="avatar avatar-sm flex-shrink-0">
													<span class="avatar-title rounded-circle bg-primary-light"><i class="far fa-user"></i></span>
												</div>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">New user registered</span></p>
													<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<span class="avatar avatar-sm flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="" src="../assets_admin/img/profiles/avatar-04.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">Barbara Moore</span> declined the invoice <span class="noti-title">#RDW026896</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media d-flex">
												<div class="avatar avatar-sm flex-shrink-0">
													<span class="avatar-title rounded-circle bg-info-light"><i class="far fa-comment"></i></span>
												</div>
												<div class="media-body flex-grow-1">
													<p class="noti-details"><span class="noti-title">You have received a new message</span></p>
													<p class="noti-time"><span class="notification-time">2 days ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->

					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow main-drop">
						<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
							<Admin class="user-img">
								<img src="../assets_admin/img/profiles/avatar-07.jpg" alt="">
								<span class="status online"></span>
                                <span style="font-size: 18px; font-weight:600">Admin</span>
							</span>
						</a>
						<div class="dropdown-menu">
							{{-- <a class="dropdown-item" href="profile"><i data-feather="user" class="me-1"></i> Profile</a> --}}
							<a class="dropdown-item" href="{{ route('admin.settings') }}"><i data-feather="settings" class="me-1"></i> Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i data-feather="log-out" class="me-1"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                </form>
						</div>
					</li>
					<!-- /User Menu -->

				</ul>
				<!-- /Header Menu -->

			</div>
			<!-- /Header -->
