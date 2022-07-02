<?php $page="manage-projects";?>
@extends('layout.mainlayout')
@section('content')



			<!-- Page Content -->
			<div class="content">
				<div class="container">


					<div class="row" style="margin-top: 60px">

                        @if (session('status'))
                    <div class="alert alert-success mt-5" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

						@include('buyer.sidebar')

						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Proposals</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href={{ route('employer.manage-projects') }}>All Projects</a>
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



							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-10 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info">
														<span>{{ $project->category ? $project->category->name : '' }}</span>
														<h2>{{ $project->title }}</h2>
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
																		<p>Created At</p>
																		<h5>{{ $project->created_at->format('d,M Y') }}</h5>
																	</div>
																</li>
																<li>
																	<div class="slot">
																		<p>Expiry</p>
																		<h5>{{ \Carbon\Carbon::parse($project->started_at)->format('d,M Y') }}</h5>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="project-hire-info">
														<div class="projects-amount proposals">
															<h2>${{ number_format($project->price, 2) }}</h2>

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
							<!-- /project list -->

							<!-- Proposals list -->
							<div class="proposals-section mb-4">
								<h3 class="page-subtitle">Proposals By Designers</h3>
								<div class="proposal-card">

                                    @foreach ($proposals as $proposal)


                                    @if($proposal->user)
									<!-- Proposals -->
									<div class="project-proposals align-items-center">
										<div class="proposals-info">
											<div class="proposer-info">
												<div class="proposer-img">
													<img src="{{ $proposal->user->profile_photo ? asset($proposal->user->profile_photo) : '/assets/img/user/avatar-1.jpg' }}" alt="" class="img-fluid">
												</div>
												<div class="proposer-detail">
													<h4>{{ $proposal->user->name }}</h4>
													<ul class="proposal-details">
														<li> {{ $proposal->created_at->format('d,M Y') }}</li>
														<li><i class="fas fa-star text-primary"></i> {{ $proposal->user->ratings }} Ratings</li>
														<li> <a href="{{ route('designer.profile') }}" class="font-semibold text-primary">View Profile</a></li>
													</ul>
												</div>
											</div>
											<div class="proposer-bid-info">
												<div class="proposer-bid">
													<h3>${{ number_format($proposal->budget, 2) }}</h3>
													<h5>Wthin {{ \Carbon\Carbon::parse($proposal->delivery_date)->format('d,M Y') }}</h5>
												</div>
												<div class="proposer-confirm">
                                                    @if($project->hired_user)
                                                    {{-- <a data-bs-toggle="modal" class="projects-btn" disabled>Hire Now</a> --}}
                                                    @else
													<a data-bs-toggle="modal" href="#hire{{ $proposal->id }}" class="projects-btn">Hire Now</a>
                                                    @endif
												</div>
											</div>
										</div>
										<div class="description-proposal">
											<h5 class="desc-title">Cover Letter</h5>
											<p>{!! $proposal->cover_letter !!}</p>
										</div>
									</div>
									<!-- Proposals -->

                                    <div class="modal fade custom-modal" id="hire{{ $proposal->id }}">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content bg-modal">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center pt-0 mb-4">

                                                        <h5 class="modal-title">Are you sure to hire - {{ $proposal->user->name }} ?</h5>
                                                    </div>
                                                    <form action="{{ route('employer.hire_designer',$proposal->project_id) }}" method="POST">
                                                        @csrf
                                                        <div class="modal-info">
                                                            <div class="row">
                                                                <div class="col-12 col-md-12">

                                                                    <input type="hidden" name="seller_id" value="{{ $proposal->seller_id }}"/>

                                                                    <div class="form-group">
                                                                        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="submit-section text-center">
                                                            <button type="submit" class="btn btn-primary btn-block submit-btn">Hire Now</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    @endif



                                    @endforeach



								</div>
							</div>
							<!-- /Proposals list -->

							<!-- pagination -->
							<div class="row">
								<div class="col-md-12">
									{{ $proposals->links() }}
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
