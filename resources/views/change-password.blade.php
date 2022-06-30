<?php $page="milestones";?>
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
												<form method="POST" action="{{ route('password.update') }}">
                                                    @csrf
													<div class="form-group">
														<label>Email</label>
														<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
													</div>
													<div class="form-group">
														<label>New Password</label>
														<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
													</div>
													<div class="form-group">
														<label>Confirm Password</label>
														<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
