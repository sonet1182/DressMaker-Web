<?php $page="freelancer-project-proposals";?>
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
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="freelancer-view-project-detail">Overview & Discussions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="{{ route('designer.submit_project',$project->id) }}">Submit</a>
									</li>
									{{-- <li class="nav-item">
										<a class="nav-link" href="freelancer-task">Tasks</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-files">Files</a>
									</li> --}}
									<li class="nav-item">
										<a class="nav-link" href="freelancer-payment">Payments</a>
									</li>
								</ul>
							</nav>

							<!-- project list -->
							<div class="my-projects">
								<div class="row">
									<div class="col-lg-9 d-flex">
										<div class="pro-post w-100">
											<div class="card-body">
												<div class="projects-list">
													<h2>{{ $project->title }}</h2>
													<ul class="prolist-details">
														<li>
															<div class="list-slot">
																<h5>Client Final Price</h5>
																<p class="price">${{ number_format($project->price,2) }}</p>
																<p class="mb-0">( FIXED )</p>
															</div>
														</li>

														<li>
															<div class="list-slot">
																<h5>Location</h5>
																<p><img src="/assets/img/en.png" height="13" alt="Lang"> {{ $project->user && $project->user->address ? $project->user->address->country : '' }}</p>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-3 mb-3 d-flex flex-wrap">
										<div class="pro-post mb-3 w-100">
											<div class="card-body">
												<div class="hire-box text-center">
													<h6>Hired</h6>
													<img alt="profile image" src="{{ $project->user ? asset($project->user->profile_photo) : '/assets/img/img-04.jpg' }}" class="avatar-lg rounded-circle">
													<p>{{ $project->user ? $project->user->name : '' }} -  Client</p>
													<a href="/freelancer-chats" class="btn btn-chat">Chat Now</a>
												</div>
											</div>
										</div>
										<div class="hire-select w-100">

                                            {{-- <a type="button" class="btn btn-success" href="{{ route('designer.project_submit', $project->id) }}">
                                                Submit Project
                                            </a> --}}

										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->



                                <div class="setting-content">
									<form action="{{ route('designer.profile-update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
										<div class="card">
											<div class="pro-head">
												<h3 class="pro-title without-border mb-0">Submit</h3>
											</div>
											<div class="pro-body">
												<div class="row">

													<div class="form-group col-md-12">
														<label>Remark</label>
														<textarea class="form-control" name="remark" value="" rows="4"></textarea>
													</div>
													<div class="form-group col-md-12">
														<label>Project Link</label>
														<input type="text" class="form-control" name="link" value="">
													</div>

												</div>
												<div class="form-row pro-pad pt-0">
													<div class="form-group col-md-6 pro-pic">
														<label>Upload Document</label>
														<div class="d-flex align-items-center">
															<div class="upload-images">
																<img src="{{ Auth::user()->profile_photo ? asset(Auth::user()->profile_photo) : '/assets/img/img-02.jpg' }}" id="profile_photo" alt="Image">
																<a href="javascript:void(0);" class="btn btn-icon btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
															</div>
															<label class="file-upload image-upbtn ms-3">
																Change Image <input type="file" name="profile_photo" onchange="document.getElementById('profile_photo').src = window.URL.createObjectURL(this.files[0])">
															</label>
														</div>

													</div>

												</div>
											</div>
										</div>


										<div class="card text-end">
											<div class="pro-body">
												<button class="btn btn-primary click-btn btn-plan" type="submit">Submit</button>
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
