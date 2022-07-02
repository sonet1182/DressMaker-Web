<?php $page="profile-settings";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid" style="margin-top: 60px">
					<div class="row">

						@include('buyer.sidebar')

						<div class="col-xl-9 col-md-8">
                            @if (session('status'))
                    <div class="alert alert-success mt-5" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
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

                                <form action="{{ route('employer.profile-update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

								<div class="setting-content">
									<div class="card">
										<div class="pro-head">
											<h3 class="pro-title without-border mb-0">Profile Basics </h3>
										</div>

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

									</div>

									<div class="card">
                                        <div class="pro-head">
                                            <h3 class="pro-title without-border mb-0">Location</h3>
                                        </div>
                                        <div class="pro-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Address</label>
                                                    <input type="text" name="address" value="{{ Auth::user()->address ? Auth::user()->address->address : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>State</label>
                                                    <input type="text" name="state" value="{{ Auth::user()->address ? Auth::user()->address->state : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Zipcode</label>
                                                    <input type="text" name="zip_code" value="{{ Auth::user()->address ? Auth::user()->address->zip_code : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Country</label>
                                                    <select name="country" class="form-control select">
                                                        <option value="Canada" {{ Auth::user()->address && Auth::user()->address->country =='Canada' ? 'selected' : '' }}>Canada</option>
                                                        <option value="China"  {{ Auth::user()->address && Auth::user()->address->country =='Chine' ? 'selected' : '' }}>China</option>
                                                        <option value="India" {{ Auth::user()->address && Auth::user()->address->country =='India' ? 'selected' : '' }}>India</option>
                                                        <option value="Japan" {{ Auth::user()->address && Auth::user()->address->country =='Japan' ? 'selected' : '' }}>Japan</option>
                                                        <option value="Pakistan" {{ Auth::user()->address && Auth::user()->address->country =='Pakistan' ? 'selected' : '' }}>Pakistan</option>
                                                        <option value="Russia" {{ Auth::user()->address && Auth::user()->address->country =='Russia' ? 'selected' : '' }}>Russia</option>
                                                        <option value="USA" {{ Auth::user()->address && Auth::user()->address->country =='USA' ? 'selected' : '' }}>USA</option>
                                                        <option value="UK" {{ Auth::user()->address && Auth::user()->address->country =='UK' ? 'selected' : '' }}>UK</option>
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
													<textarea class="form-control" rows="5" name="overview">{!! Auth::user()->overview !!}</textarea>
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
                                                    <input type="text" name="facebook" value="{{ Auth::user()->links ? Auth::user()->links->facebook : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Dribble</label>
                                                    <input type="text" name="dribble" value="{{ Auth::user()->links ? Auth::user()->links->facebook : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Twitter</label>
                                                    <input type="text" name="twitter" value="{{ Auth::user()->links ? Auth::user()->links->facebook : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>LinkedIn</label>
                                                    <input type="text" name="linkedin" value="{{ Auth::user()->links ? Auth::user()->links->facebook : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Behance</label>
                                                    <input type="text" name="behance" value="{{ Auth::user()->links ? Auth::user()->links->facebook : '' }}" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Instragram</label>
                                                    <input type="text" name="instragram" value="{{ Auth::user()->links ? Auth::user()->links->facebook : '' }}" class="form-control">
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

                            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection
