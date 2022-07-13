<?php $page="freelancer-favourites";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content bookmark">
				<div class="container-fluid">
					<div class="row" style="margin-top: 60px">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							@include('seller.layout.sidenav')
						</div>
						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="{{ route('designer.favourites') }}">Bookmarked Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-invitations">Invitations</a>
									</li>
								</ul>
							</nav>
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="pro-post mb-4">
											<div class="project-table">
												<div class="table-responsive">
													<h3>BOOKMARKED PROJECTS</h3>
													<table class="table table-hover table-center mb-0 datatable">
														<thead class="thead-pink">
															<tr>
																<th>Project name</th>
																<th>Client Detail</th>
																<th>Location</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>3D Renders and Amazon Product Store images/Video</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/company/img-1.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Amaze Tech</span><span>UI/UX Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/de.png" class="me-2" alt="" height="16"> GERMANY</h2></td>
																<td><a href="javascript:void(0);" class="fav"><i class="fas fa-heart filled"></i></a></td>
															</tr>
															<tr>
																<td>Website Designer Required For Directory Theme</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/company/img-2.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Park Inc </span><span>PHP Developer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td><a href="javascript:void(0);" class="fav"><i class="fas fa-heart filled"></i></a></td>
															</tr>
															<tr>
																<td>WooCommerce Product Page Back Up Restoration</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/company/img-3.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Tech Zone </span><span>Graphic Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/de.png" class="me-2" alt="" height="16"> GERMANY</h2></td>
																<td><a href="javascript:void(0);" class="fav"><i class="fas fa-heart filled"></i></a></td>
															</tr>
															<tr>
																<td>Laravel Backend Developer to finish ongoing project</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/company/img-4.png" alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Abc Software</span><span>iOS Developer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td><a href="javascript:void(0);" class="fav"><i class="fas fa-heart filled"></i></a></td>
															</tr>
															<tr>
																<td>3D Renders and Amazon Product Store images/Video</td>
																<td>
																	<h2 class="table-avatar">
																		<a href="project-details" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/company/img-9.png"alt="User Image">
																		</a>
																		<a href="project-details"><span class="profile-name">Soft Technologies </span><span>UI/UX Designer</span>
																		<span class="rating mt-2">
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star filled"></i>
																			<i class="fas fa-star"></i>
																		</span>
																		</a>
																	</h2>
																</td>
																<td>39 Oct 2021</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- project list -->

						</div>
					</div>
				</div>
			</div>

			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
		<!-- The Modal -->
		<div class="modal fade" id="bookmark">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">INVITE FREELANCER</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<form action="#">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="average-bids">
											<p>Contact <span class="text-highlight">John Doe </span>  about your Project</p>
										</div>
										<div class="form-group">
											<label>Invite title</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<label>Send a private message</label>
											<textarea class="form-control" rows="5">Hi  John Doe, I noticed your profile and would like to offer you my project. We can discuss any details over chat.</textarea>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Hire for</label>
												<div class="radio">
													<label class="custom_radio">
														<input type="radio" value="fix" name="fix" checked>
														<span class="checkmark"></span>  Fixed Price
													</label>
													<label class="custom_radio">
														<input type="radio" value="fix" name="fix">
														<span class="checkmark"></span>  Hourly Rate
													</label>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Hire for</label>
												<div class="radio">
													<label class="custom_radio">
														<input type="radio" value="fix" name="fix">
														<span class="checkmark"></span>  Fixed Price
													</label>
													<label class="custom_radio">
														<input type="radio" value="fix" name="fix">
														<span class="checkmark"></span>  Hourly Rate
													</label>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Budget</label>
												<div class="form-row">
													<div class="col-6">
														<div class="input-group">
															<div class="input-group-prepend bg-pink">
																 <span class="input-group-text" id="basic-add">$</span>
															</div>
															<input type="text" class="form-control" placeholder="20.00">
														</div>
													</div>
													<div class="col-6">
														<select class="form-control select">
															<option value="0">USD</option>
															<option value="0">USD</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Budget</label>
												<div class="form-row">
													<div class="col-6">
														<div class="input-group form-inline">
															<div class="input-group-prepend bg-pink">
																 <span class="input-group-text" id="basic-addon">$</span>
															</div>
															<input type="text" class="form-control me-1" placeholder="20.00"> <label>/ hr</label>
														</div>
													</div>
													<div class="col-6">
														<select class="form-control select">
															<option value="0">USD</option>
															<option value="0">USD</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Project</label>
												<select class="form-control select">
													<option value="0">3D Renders and Amazon Product Store images/Video</option>
													<option value="0">3D Renders and Amazon Product Store Video</option>
													<option value="0">3D Renders and Amazon Product Store images</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<button type="submit" class="btn btn-primary submit-btn">Send Invite</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->
@endsection
