<?php $page="freelancer-change-password";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row" style="margin-top: 60px">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							@include('seller.layout.sidenav')
						</div>
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="{{ route('designer.profile-settings') }}">Profile Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="freelancer-change-password">Change Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-delete-account">Delete Account</a>
									</li>
								</ul>
							</nav>

							<!-- Password Content -->
							<div class="account-content setting-content">
								<div class="pro-card">
									<div class="pro-head">
										<h3 class="pro-title without-border mb-0">Change Password</h3>
									</div>
									<div class="pro-body">
										<div class="row">
											<div class="col-md-8">
												<form action="login">
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
