<?php $page="profile-settings";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row" style="margin-top: 60px">

						@include('buyer.sidebar')

						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="profile-settings">Basic Settings</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="change-password">Change Password</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="delete-account">Delete Account</a>
									</li>
								</ul>
							</nav>
							<div class="setting-content">
								<div class="card">
									<div class="pro-head">
										<h3 class="pro-title without-border mb-0">Delete Account</h3>
									</div>
									<div class="pro-body">
										<form action="#">
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
								<button data-bs-dismiss="modal" class="btn btn-primary black-btn click-btn btn-plan">Cancel</button>
								<button type="submit" class="btn btn-primary click-btn btn-plan">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
@endsection
