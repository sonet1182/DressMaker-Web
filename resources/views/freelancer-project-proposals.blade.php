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
								<h3>Proposals</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href="{{ route('designer.projects') }}">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav>

							<!-- Proposals list -->
							<div class="proposals-section">
								<h3 class="page-subtitle">My Proposals</h3>

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
																<h3 class="client-price me-2">$599.00</h3>
																<p class="amnt-type">( FIXED )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="assets/img/developer/developer-01.jpg" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>Hannah Finn</h4>
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

							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									<ul class="paginations freelancer">
										<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- /pagination -->

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
