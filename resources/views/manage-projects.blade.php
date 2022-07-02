<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row" style="margin-top: 60px">

						@include('buyer.sidebar')

						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<div class="row">
									<div class="col-md-6">
										<h3>Manage Projects</h3>
									</div>
									<div class="col-md-6 text-end">
										<a href="{{ route('employer.post-project') }}" class="btn btn-primary back-btn mb-4">Post a Project</a>
									</div>
								</div>
							</div>
							<nav class="user-tabs project-tabs">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link active" href={{ route('employer.manage-projects') }}>All Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="pending-projects">Pending Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav>


                            @foreach ($projects as $project)

                            <div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">

                                                        <span>{{ $project->category->name }}</span>

                                                        <a href="{{ route('employer.project-details',$project->id) }}">
														    <h2>{{ $project->title }} </h2>
                                                        </a>

														<div class="customer-info">
															<ul class="list-details">
																<li>
																	<div class="slot">
																		<p>Price type</p>
																		<h5>{{ $project->pricing_type ? $project->pricing_type->name : '' }}</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Location</p>
																		<h5>{{ $project->user->address ? $project->user->address->state.','.$project->user->address->country : '' }}</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Expiry</p>
																		<h5>
                                                                            {{ \Carbon\Carbon::parse($project->end_date)->format('d,M Y') }}
                                                                        </h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="content-divider"></div>
														<div class="projects-amount">
															<h3>${{ number_format($project->price, 2) }}</h3>
															<h5>in 12 Days</h5>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action">

                                                            @if($project->hired)

                                                            <a href="{{ route('employer.project-details',$project->id) }}" class="projects-btn">View Details </a>
															<a href="#" class="hired-detail">Hired on {{ $project->updated_at->format('d M, Y') }}</a>

                                                            @else

                                                            <a href="{{ route('employer.project-proposals', $project->id) }}" class="projects-btn">View Proposals </a>
															<a href="edit-project" class="projects-btn">Edit Jobs</a>

                                                            @endif
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 d-flex flex-wrap">


                                        @if($project->hired)

                                        <div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center hired">
													<h3>Hired</h3>
													<img src="{{ $project->hired && $project->hired->profile_photo ? asset($project->hired->profile_photo) : '/assets/img/developer/developer-01.jpg' }}" alt="" class="img-fluid">
													<p class="mb-0">{{ $project->hired ? $project->hired->name : '' }}</p>
												</div>
											</div>
										</div>
                                        @else

                                        <div class="projects-card flex-fill">
											<div class="card-body p-2">
												<div class="prj-proposal-count text-center">
													<span>{{ $project->proposals ? $project->proposals->count() : '0' }}</span>
													<h3>Proposals</h3>
												</div>
											</div>
										</div>

                                        @endif
									</div>
								</div>
							</div>

                            @endforeach





							{{-- <div class="row">
								<div class="col-md-12">
									<ul class="paginations list-pagination">
										<li><a href="#"><i class="fas fa-angle-left"></i> Previous</a></li>
										<li><a href="#">1</a></li>
										<li><a href="#" class="active">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div> --}}


						</div>
					</div>
				</div>
			</div>

			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection
