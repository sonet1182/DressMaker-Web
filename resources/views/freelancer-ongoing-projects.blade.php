<?php $page="freelancer-project-proposals";?>
@extends('layout.mainlayout')
@section('content')


<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-md-4 theiaStickySidebar">
							<div class="settings-widget">
								<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
									<a href="freelancer-profile"><img alt="profile image" src="assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>
									<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
										<p class="mb-2">Welcome,</p>
										<h3 class="mb-0"><a href="freelancer-profile">John Danie S.</a></h3>
										<p class="mb-0">@johndaniee</p>
									</div>
								</div>
								<div class="settings-menu">
									<ul>
										<li class="nav-item">
											<a href="freelancer-dashboard" class="nav-link">
												<i class="material-icons">verified_user</i> Dashboard
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-project-proposals" class="nav-link active">
												<i class="material-icons">business_center</i> Projects
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-favourites" class="nav-link">
												<i class="material-icons">local_play</i> Favourites
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-review" class="nav-link">
												<i class="material-icons">record_voice_over</i> Reviews
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-portfolio" class="nav-link">
												<i class="material-icons">pie_chart</i> Portfolio
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-chats" class="nav-link">
												<i class="material-icons">chat</i> Messages
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-membership" class="nav-link">
												<i class="material-icons">person_add</i> Membership
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-verify-identity" class="nav-link">
												<i class="material-icons">person_pin</i> Verify Identity
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-withdraw-money" class="nav-link">
												<i class="material-icons">wifi_tethering</i> Payments
											</a>
										</li>
										<li class="nav-item">
											<a href="freelancer-profile-settings" class="nav-link">
												<i class="material-icons">settings</i>  Settings
											</a>
										</li>
										<li class="nav-item">
											<a href="{{ route('home') }}" class="nav-link">
												<i class="material-icons">power_settings_new</i> Logout
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-9 col-md-8">
							<div class="page-title">
								<h3>Manage Projects</h3>
							</div>
							<nav class="user-tabs mb-4">
								<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
									<li class="nav-item">
										<a class="nav-link" href="freelancer-project-proposals">My Proposals</a>
									</li>
									<li class="nav-item">
										<a class="nav-link active" href="freelancer-ongoing-projects">Ongoing Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-completed-projects">Completed Projects</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="freelancer-cancelled-projects">Cancelled Projects</a>
									</li>
								</ul>
							</nav>

							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<span>Dreamguystech</span>
														<h2>Website Designer Required For Directory Theme</h2>
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

							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<span>Dreamguystech</span>
														<h2>WooCommerce Product Page Back Up Restoration</h2>
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
																<h3 class="client-price me-2">$320.00</h3>
																<p class="amnt-type">( FIXED )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="assets/img/developer/developer-02.jpg" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>James Douglas</h4>
																<ul class="proposal-details">
																	<li> October 12, 2021</li>
																	<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-start project">
															<a href="freelancer-view-project-detail" class="projects-btn project">View Details </a>
															<p class="hired-detail">Project taken on</p>
															<p class="hired-date">25 October 2021</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->

							<!-- project list -->
							<div class="my-projects-list">
								<div class="row">
									<div class="col-lg-12 flex-wrap">
										<div class="projects-card flex-fill">
											<div class="card-body">
												<div class="projects-details align-items-center">
													<div class="project-info project">
														<span>Dreamguystech</span>
														<h2>PHP Laravel Developer Required (Contractual Employement)</h2>
														<div class="proposal-client">
															<h4 class="title-info">Client Price</h4>
															<div class="d-flex">
																<h3 class="client-price me-2">$500.00</h3>
																<p class="amnt-type">( FIXED )</p>
															</div>
														</div>
													</div>
													<div class="project-hire-info project">
														<div class="content-divider"></div>
														<div class="proposer-info project">
															<div class="proposer-img">
																<img src="assets/img/developer/developer-03.jpg" alt="" class="img-fluid">
															</div>
															<div class="proposer-detail">
																<h4>Tony Ingle</h4>
																<ul class="proposal-details">
																	<li> October 26, 2021</li>
																	<li><i class="fas fa-star text-primary"></i> 4 Reviews</li>
																</ul>
															</div>
														</div>
														<div class="content-divider"></div>
														<div class="projects-action text-start project">
															<a href="freelancer-view-project-detail" class="projects-btn project">View Details </a>
															<p class="hired-detail">Project taken on</p>
															<p class="hired-date">22 October 2021</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /project list -->

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
