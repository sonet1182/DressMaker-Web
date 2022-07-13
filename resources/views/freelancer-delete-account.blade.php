<?php $page="freelancer-profile-settings";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="{{ route('designer.profile') }}"><img alt="profile image" src="/assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<h3 class="mb-0"><a href="{{ route('designer.profile') }}">John Danie S.</a></h3>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="freelancer-dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('designer.projects') }}" class="nav-link">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('designer.favourites') }}" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('designer.review') }}" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-portfolio" class="nav-link">
												<i class="material-icons">pie_chart</i> Portfolio
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('designer.chats') }}" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-membership" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('designer.withdraw_payment') }}" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('designer.profile-settings') }}" class="nav-link active">
												<i class="material-icons">settings</i>  Settings
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
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="{{ route('designer.profile-settings') }}">Profile Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-change-password">Change Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="freelancer-delete-account">Delete Account</a>
									</li>
								</ul>
							</nav>
							<div class="setting-content">
								<div class="pro-card">
									<div class="pro-head">
										<h3 class="pro-title without-border mb-0">Delete Account</h3>
									</div>
									<div class="pro-body">
										<form action="{{ route('home') }}">
											<div class="form-group">
												<label>Please Explain Further**</label>
												<textarea class="form-control" rows="5"></textarea>
											</div>
											<div class="form-group">
												<label>Password*</label>
												<input type="password" class="form-control">
											</div>
											<div class="row">
												<div class="col-md-12">
													<a class="btn btn-primary click-btn btn-plan" data-bs-toggle="modal" href="#delete-acc">Delete Account</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		<!-- The Modal -->
		<div class="modal fade custom-modal" id="delete-acc">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-body del-modal">
						<form action="{{ route('home') }}">
							<div class="text-center pt-0 mb-5">
								<i class="fas fa-exclamation-triangle fa-3x"></i>
								<h3>Are you sure? Want to delete Account</h3>
							</div>
							<div class="submit-section text-center">
								<button data-bs-dismiss="modal" class="btn btn-primary black-btn click-btn">Cancel</button>
								<button type="submit" class="btn btn-primary click-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
@endsection
