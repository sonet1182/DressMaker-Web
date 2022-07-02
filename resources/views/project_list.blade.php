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
														<h2>W{{ $project->title }}</h2>
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
															<a href="freelancer-view-project-detail" class="projects-btn project">View Details </a>
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

			<!-- The Modal -->
			<div class="modal fade" id="file">
				<div class="modal-dialog modal-dialog-centered modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">EDIT PROPOSAL</h4>
							<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a></span>
						</div>
						<div class="modal-body">
							<form action="#">
								<div class="modal-info">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Cost</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Days</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control summernote" rows="5"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="submit-section text-end">
									<button type="submit" class="btn btn-primary submit-btn">Save Proposal</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /The Modal -->


        </div>
		<!-- /Main Wrapper -->
@endsection
