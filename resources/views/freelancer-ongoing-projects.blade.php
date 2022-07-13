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
										<a class="nav-link" href="{{ route('designer.proposals') }}">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ $type == 'ongoing' ? 'active' : '' }}" href="{{ route('designer.ongoing_projects') }}">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ $type == 'completed' ? 'active' : '' }}" href="{{ route('designer.completed_projects') }}">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link {{ $type == 'cancelled' ? 'active' : '' }}" href="{{ route('designer.cancelled_projects') }}">Cancelled Projects</a>
									</li>
								</ul>
							</nav>

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
																<h3 class="client-price me-2">${{ number_format($project->price) }}</h3>
																<p class="amnt-type">( FIXED )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="{{ $project->user ? asset($project->user->profile_photo) : '/assets/img/developer/developer-01.jpg' }}" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>{{ $project->user->name ?? '' }}</h4>
																<ul class="proposal-details">
																	<li> {{ $project->user ? $project->user->created_at->format('d M,Y') : '' }}</li>
																	<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-start project">
															<a href="{{ route('designer.ongoing_project_details',$project->id) }}" class="projects-btn project">View Details </a>
															<p class="hired-detail">Project taken on</p>
															<p class="hired-date">{{ \Carbon\Carbon::parse($project->hired_at)->format('d,M Y') }}</p>
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

        </div>
		<!-- /Main Wrapper -->
@endsection
