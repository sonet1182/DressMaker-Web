<?php $page="favourites";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content bookmark">
				<div class="container-fluid">
					<div class="row">



                        @include('buyer.sidebar')

						<div class="col-xl-9 col-md-8">
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="favourites">Bookmarked Freelancers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="invited-freelancer">Invited Freelancers</a>
									</li>
								</ul>
							</nav>
							<!-- project list -->
							<div class="my-projects-view">
								<div class="row">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header">
												<h5 class="card-title">Invited Freelancers</h5>
											</div>
											<div class="card-body">
												<div class="table-responsive table-box">
													<table class="table table-hover table-center mb-0 datatable">
														<thead class="thead-pink">
															<tr>
																<th>Freelancer Detail</th>
																<th>Project name</th>
																<th>Invite date </th>
																<th>Location</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="{{ route('designer.profile') }}" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/img-02.jpg" alt="User Image">
																		</a>
																		<a href="{{ route('designer.profile') }}"><span class="profile-name">Andrew Glover </span><span>UI/UX Designer</span>
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
																<td>Website Designer Required For Directory Theme</td>
																<td>25 JUN 2021</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/de.png" class="me-2" alt="" height="16"> Germany</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="{{ route('designer.profile') }}" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/img-03.jpg" alt="User Image">
																		</a>
																		<a href="{{ route('designer.profile') }}"><span class="profile-name">Mickey Bernier </span><span>UI/UX Designer</span>
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
																<td>Create website wordpress for a Brand</td>
																<td>25 JUN 2021</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="{{ route('designer.profile') }}" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/img-04.jpg" alt="User Image">
																		</a>
																		<a href="{{ route('designer.profile') }}"><span class="profile-name">Tony Ingle </span><span>UI/UX Designer</span>
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
																<td>Email automation set up and segmentation</td>
																<td>25 JUN 2021</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/de.png" class="me-2" alt="" height="16"> Germany</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="{{ route('designer.profile') }}" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/img-05.jpg" alt="User Image">
																		</a>
																		<a href="{{ route('designer.profile') }}"><span class="profile-name">Timothy Smith </span><span>UI/UX Designer</span>
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
																<td>Build me a website by CMS-Wordpress</td>
																<td>25 JUN 2021</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/us.png" class="me-2" alt="" height="16"> USA</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<h2 class="table-avatar">
																		<a href="{{ route('designer.profile') }}" class="avatar avatar-md tab-imgcircle me-2">
																			<img class="avatar-img rounded-circle" src="/assets/img/img-01.png" alt="User Image">
																		</a>
																		<a href="{{ route('designer.profile') }}"><span class="profile-name">David Peterson </span><span>UI/UX Designer</span>
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
																<td>3D Renders and Amazon Product Store images/Video</td>
																<td>25 JUN 2021</td>
																<td><h2 class="table-avatar"><img src="/assets/img/flags/de.png" class="me-2" alt="" height="16"> Germany</h2></td>
																<td>
																	<div class="table-action">
																		<a href="javascript:void(0);" class="me-2"><i class="fab fa-rocketchat"></i></a>
																		<a href="javascript:void(0);" class="orange-text"><i class="material-icons">delete_sweep</i></a>
																	</div>
																</td>
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
@endsection
