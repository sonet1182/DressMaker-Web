<?php $page="project";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Projects</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Projects</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

							<!-- Search Filter -->
							<div class="card search-filter">
								<div class="card-header d-flex justify-content-between">
									<h4 class="card-title mb-0">FILTERS</h4>
									<a href="javascript:void(0);">Clear All</a>
								</div>
								<div class="card-body">
								<div class="filter-widget">
									<h4>Category</h4>
									<div class="form-group">
										<select class="form-control select">
											<option value="">Select Category</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
										</select>
									</div>
								</div>
								<div class="filter-widget">
									<h4>Location</h4>
									<div class="form-group">
										<select class="form-control select" name="country">
											<option value="">Select One</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach


										</select>
									</div>
								</div>

								<div class="filter-widget">
									<h4>Pricing Type</h4>
									<div class="form-group">
										<select class="form-control select">
											<option value="">Select One</option>
                                            @foreach ($pricings as $pricing)
                                            <option value="{{ $pricing->id }}">{{ $pricing->name }}</option>
                                            @endforeach
										</select>
									</div>
								</div>

								{{-- <div class="filter-widget">
									<h4>Avalability</h4>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_time" checked>
											<span class="checkmark"></span> Hourly
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_time">
											<span class="checkmark"></span> Part Time
										</label>
									</div>
									<div>
										<label class="custom_check">
											<input type="checkbox" name="select_time">
											<span class="checkmark"></span>  Full Time
										</label>
									</div>
								</div> --}}

									<div class="btn-search">
										<button type="button" class="btn btn-block">Search</button>
									</div>
								</div>
							</div>
							<!-- /Search Filter -->

						</div>

						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>All Projects</h3>
                                <hr>
							</div>


							<!-- Proposals list -->
							<div class="proposals-section">


                                @foreach ($projects as $project)

                                <!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<span>{{ $project->category ? $project->category->name : '' }}</span>
														<h2>{{ $project->title }}</h2>
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
																<h3 class="client-price me-2">${{ number_format($project->price, 2) }}</h3>
																<p class="amnt-type">( {{ $project->pricing_type ? $project->pricing_type->name : '' }} )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img
                                                                src="{{ $project->user->profile_photo ? asset($project->user->profile_photo) : asset('assets/img/img-04.jpg') }}"
                                                                alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>{{ $project->user ? $project->user->name : '' }}</h4>
																<ul class="proposal-details">
																	<li> October 10, 2021</li>
																	<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-start project">
															<a href="{{ url('project-details/'.$project->id) }}" class="projects-btn project">View Details </a>
															<p class="hired-detail">Project taken on</p>
															<p class="hired-date">28 October 2021</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->

                                @endforeach



							</div>
							<!-- /Proposals list -->



						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->

		<!-- The Modal -->
		<div class="modal fade" id="rating">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header d-block b-0 pb-0">
						<span class="modal-close float-end"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<form action="project">
							<div class="modal-info">
								<div class="text-center pt-0 mb-5">
									<h3>Please login to Favourite Project</h3>
								</div>
								<div class="submit-section text-center">
									<a  data-bs-dismiss="modal" href="#" class="btn btn-primary black-btn click-btn">Cancel</a>
									<button type="submit" class="btn btn-primary click-btn">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- /The Modal -->
@endsection
