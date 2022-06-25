<?php $page="profile-settings";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid" style="margin-top: 60px">
					<div class="row">

						<!-- sidebar -->
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="user-account-details">
                                        <img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : asset('assets/img/img-04.jpg') }}" alt="" class="avatar-lg rounded-circle">
                                    </a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<h3 class="mb-0"><a href="freelancer-profile">{{ Auth::user()->name }}</a></h3>
										<p class="mb-0">@employer{{ Auth::user()->id }}</p>
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
							<div class="pro-pos">
								<nav class="user-tabs mb-4">
									<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
										<li class="nav-item">
											<a class="nav-link active" href="profile-settings">Basic Settings</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="change-password">Change Password</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="delete-account">Delete Account</a>
										</li>
									</ul>
								</nav>
								<div class="setting-content">
									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Profile Basics </h3>
										</div>
										<form action="{{ route('employer.profile-update') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
											<div class="pro-body p-0">
												<div class="form-row pro-pad">

													<div class="form-group col-md-6">
														<label>Contact Number</label>
														<input type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}">

													</div>
													<div class="form-group col-md-6">
														<label>Gender</label>
														<select name="gender" class="form-control select">
															<option value="Male" {{ Auth::user()->gender == 'Male' ? 'Selected' : '' }}>Male</option>
															<option value="Female" {{ Auth::user()->gender == 'Female' ? 'Selected' : '' }}>Female</option>
														</select>
													</div>



													<div class="form-group col-md-6">
														<label>Language </label>
														<select name="gender" class="form-control select">
															<option value="English" {{ Auth::user()->gender == 'English' ? 'Selected' : '' }}>English</option>
															<option value="French" {{ Auth::user()->gender == 'French' ? 'Selected' : '' }}>French</option>
															<option value="Hindi" {{ Auth::user()->gender == 'Hindi' ? 'Selected' : '' }}>Hindi</option>
														</select>
													</div>
												</div>
												<div class="form-row pro-pad pt-0">
													<div class="form-group col-md-6 pro-pic">
														<label>Profile Picture</label>
														<div class="d-flex align-items-center">
															<div class="upload-images">
																<img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : '/assets/img/img-02.jpg' }}" id="profile_photo" alt="Image">
																<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
															</div>
															<label class="file-upload image-upbtn ms-3">
																Change Image <input type="file" name="profile_photo" onchange="document.getElementById('profile_photo').src = window.URL.createObjectURL(this.files[0])">
															</label>
														</div>
														<p>Image size 300*300</p>
													</div>
												</div>
											</div>
										</form>
									</div>

									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Location</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-12">
													<label>Address</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>State</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Zipcode</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Country</label>
													<select class="form-control select">
														<option value="0">India</option>
														<option value="1" >China</option>
														<option value="2">Japan</option>
													</select>
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Overview</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-12">
													<textarea class="form-control" rows="5"></textarea>
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Social Links</h3>
										</div>
										<div class="pro-body">
											<div class="row">
												<div class="form-group col-md-6">
													<label>Facebook</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Dribble</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Twitter</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>LinkedIn</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Behance</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group col-md-6">
													<label>Behance</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>

									<div class="card">
										<div class="text-end">
											<div class="pro-body">
												<button class="btn btn-secondary click-btn btn-plan" type="submit">Cancel</button>
												<button class="btn btn-primary click-btn btn-plan" type="submit">Update</button>
											</div>
										</div>
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
@endsection
