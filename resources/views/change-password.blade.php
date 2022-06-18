<?php $page="milestones";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">

						<!-- sidebar -->
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="user-account-details"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<a href="user-account-details"><h3 class="mb-0">John Danie S.</h3></a>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="manage-projects" class="nav-link">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="membership-plans" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="milestones" class="nav-link">
												<i class="material-icons">pie_chart</i> Milestones
											</a>
										</li>
										<li class="nav-item">
											<a href="verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="deposit-funds" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="profile-settings" class="nav-link active">
												<i class="material-icons">settings</i> Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('home') }}" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /sidebar -->

						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="profile-settings">Basic Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="change-password">Change Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="delete-account">Delete Account</a>
									</li>
								</ul>
							</nav>

							<!-- Password Content -->
							<div class="account-content setting-content">
								<div class="card">
									<div class="pro-head">
										<h3 class="pro-title without-border mb-0">Change Password</h3>
									</div>
									<div class="pro-body">
										<div class="row">
											<div class="col-md-8">
												<form action="dashboard">
													<div class="form-group">
														<label>Old Password</label>
														<input type="password" class="form-control">
													</div>
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control">
													</div>
													<div class="form-group">
														<label>Confirm Password</label>
														<input type="password" class="form-control">
													</div>
													<div class="row">
														<div class="col-md-12">
															<button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Password Content -->
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection
