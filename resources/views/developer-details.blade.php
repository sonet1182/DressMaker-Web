<?php $page="developer-details";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Developer Details</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"> Developer details</li>
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
						<div class="col-md-12">
							<div class="profile">
								<div class="profile-box">
									<div class="provider-widget">
										<div class="pro-info-left">
											<div class="provider-img"><img src="{{ asset($user->profile_photo) }}" alt="User" height="154"></div>
											<div class="profile-info">
												<h2 class="profile-title">{{ $user->name }}</h2>
												<p class="profile-position">Designer</p>
												<div><a href="#" class="btn full-btn">Full time</a></div>
												<ul class="profile-preword">
													<li>< {{ $user->address->country }}</li>
													<li><div class="rating">
														<span class="average-rating">4.6</span>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star filled"></i>
														<i class="fas fa-star"></i>
													</div></li>
												</ul>
											</div>
										</div>
										<div class="pro-info-right profile-inf r-0">
											<ul class="profile-right">
												<li><div><h3 class="amt-hr">${{ $user->hourly_rate }}.00</h3> <p>( Per Hour )</p></div></li>
											</ul>
											<div class="d-flex align-items-center justify-content-md-end justify-content-center">
												<a href="javascript:void(0)"><i class="fas fa-heart heart fa-2x me-2 orange-text"></i></a>
												<a class="btn bid-btn" data-bs-toggle="modal" href="#hire">Hire Now <i class="fas fa-long-arrow-alt-right"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="profile-list">
									<ul>
										<li>
											<span class="cont bg-blue">00</span>
											<strong class="proj-title"> Completed Projects</strong>
										</li>
										<li>
											<span class="cont bg-red">00</span>
											<strong class="proj-title"> Ongoing Projects</strong>
										</li>
										<li>
											<span class="cont bg-violet">89%</span>
											<strong class="proj-title"> Recommended</strong>
										</li>
										<li>
											<span class="cont bg-yellow">{{ $hired_number }}</span>
											<strong class="proj-title"> Rehired</strong>
										</li>
										<li>
											<span class="cont bg-pink">{{ $hired_number }}</span>
											<strong class="proj-title"> Clients</strong>
										</li>
										<li>
											<span class="cont bg-navy">00</span>
											<strong class="proj-title"> Feedbacks</strong>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-8 col-md-12">

							<div class="pro-view">

								<!-- Tab Detail -->
								<nav class="provider-tabs mb-4">
									<ul class="nav nav-tabs nav-tabs-solid nav-justified">
										<li class="nav-item">
											<a class="nav-link" href="#overview">
												<img src="/assets/img/icon/tab-icon-01.png" height="25" alt="User Image">
												<p class="bg-red">Overview</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#project">
												<img src="/assets/img/icon/tab-icon-02.png" height="25" alt="User Image">
												<p class="bg-blue">Projects</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#experience">
												<img src="/assets/img/icon/tab-icon-03.png" height="25" alt="User Image">
												<p class="bg-violet">Experience</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#education">
												<img src="/assets/img/icon/tab-icon-04.png" height="25" alt="User Image">
												<p class="bg-yellow">Education</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#skill">
												<img src="/assets/img/icon/tab-icon-05.png" height="25" alt="User Image">
												<p class="bg-pink">Skills</p>
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" href="#feedback">
												<img src="/assets/img/icon/tab-icon-06.png" height="25" alt="User Image">
												<p class="bg-green">Feedbacks</p>
											</a>
										</li>
									</ul>
								</nav>
								<!-- /Tab Detail -->

								<!-- Overview Tab Content -->
								<div class="pro-post widget-box" id="overview">
									<h3 class="pro-title">Overview</h3>
									<div class="pro-content">
										{{ $user->overview }}
									</div>
								</div>
								<!-- /Overview Tab Content -->

								<!-- Project Tab Content -->
								<div class="pro-post project-widget widget-box" id="project">
									<h3 class="pro-title">Portfolio</h3>
									<div class="pro-content">
										<div class="row">

                                            @foreach ($portfolios as $portfolio)
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
												<div class="project-widget">
													<div class="pro-image">
														<a href="{{  asset($portfolio->image) }}" data-fancybox="gallery2">
															<img class="img-fluid" alt="User Image" src="{{ $portfolio->image ? asset($portfolio->image) : '/assets/img/project.jpg' }}">
														</a>
													</div>
													<div class="pro-detail">
														<h3 class="pro-name">
															{{ $portfolio->title }}
														</h3>

													</div>
												</div>
											</div>
                                            @endforeach


											<div class="col-md-12 text-center">
												<a href="project" class="btn more-btn">View more </a>
											</div>
										</div>
									</div>
								</div>
								<!-- /Project Tab Content -->

								<!-- Experience Tab Content -->
								<div class="pro-post project-widget widget-box" id="experience">
									<h3 class="pro-title">Experience</h3>
									<div class="pro-content">
										<div class="widget-list mb-0">
											<ul class="clearfix">
												<li>
													<h4>Logo Designer</h4>
													<h5>Techline  July 9, 2018 - March 18, 2021</h5>
													<p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
												</li>
												<li>
													<h4>Logo Designer</h4>
													<h5>Techline  July 9, 2018 - March 18, 2021</h5>
													<p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
												</li>
												<li>
													<h4>Logo Designer</h4>
													<h5>Techline  July 9, 2018 - March 18, 2021</h5>
													<p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Experience Tab Content -->

								<!-- Educational Tab Content -->
								<div class="pro-post project-widget widget-box" id="education">
									<h3 class="pro-title">Educational Details</h3>
									<div class="pro-content">
										<div class="widget-list mb-0">
											<ul class="clearfix">
												<li>
													<h4>Bachelor of Science in Game Programming & Development</h4>
													<h5>Hampshire University  January 12, 2015 - January 19, 2019</h5>
													<p>Graphic Designing artworks through making plans and utilizing the helpful analysis of companions, educators, and bosses to improve those plans. Careful discipline brings about promising results, and the capacity to acknowledge and gain from analysis from peers and even the purchaser everywhere is pivotal for accomplishment in this field.</p>
												</li>
												<li>
													<h4>Master in Gaming STudi Design</h4>
													<h5>Techline  July 9, 2018 - March 18, 2021</h5>
													<p>I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Educational Tab Content -->

								<!-- Technical Tab Content -->
								<div class="pro-post project-widget widget-box" id="skill">
									<h3 class="pro-title">Technical Skills</h3>
									<div class="pro-content">
										<div class="tags">
										<span class="badge badge-pill badge-skills">+ Web Design</span>
										<span class="badge badge-pill badge-skills">+ UI Design</span>
										<span class="badge badge-pill badge-skills">+ Node Js</span>
										<span class="badge badge-pill badge-skills">+ Javascript</span>
										</div>
									</div>
								</div>
								<!-- /Technical Tab Content -->

								<!-- Feedback Tab Content -->
								<div class="pro-post author-widget clearfix" id="feedback">
									<div class="widget-title-box clearfix">
										<h3 class="pro-title mb-0">Feedbacks</h3>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<img class="img-fluid" alt="" src="/assets/img/img-03.jpg">
											</div>
										</div>
										<div class="author-details">
											<a href="#" class="blog-author-name">Logo Designer</a>
											<div class="rating">
												<span class="average-rating">4.6</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">I am a professional graphic designer. I have more than 10-years of experience in graphics design. If you are looking for any graphic related work, contact me, I'll glad to help you.</p>
										</div>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<img class="img-fluid" alt="" src="/assets/img/img-02.jpg">
											</div>
										</div>
										<div class="author-details">
											<a href="#" class="blog-author-name">Web Designer</a>
											<div class="rating">
												<span class="average-rating">4.6</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">I am a professional Web designer. I have more than 8-years of experience in Web design. If you are looking for any Web related work, contact me, I'll glad to help you.</p>
										</div>
									</div>
								</div>
								<!-- /Feedback Tab Content -->

							</div>
						</div>

						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Follow Widget -->
							<div class="pro-post widget-box follow-widget">
								<a href="#" class="btn follow-btn">+ Follow</a>
								<ul class="follow-posts pro-post">
									<li><p>Following</p><h6>49</h6></li>
									<li><p>Followers</p><h6>422</h6></li>
								</ul>
							</div>
							<!-- /Follow Widget -->

							<!-- Language Widget -->
							<div class="pro-post widget-box language-widget">
								<h4 class="pro-title mb-0">Language Skills</h4>
								<ul class="latest-posts pro-content">
									<li><p>English</p>
										<div class="progress progress-md mb-0">
											<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
									<li><p>Russian</p>
										<div class="progress progress-md mb-0">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div></li>
									<li><p>German</p>
										<div class="progress progress-md mb-0">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</li>
								</ul>
							</div>
							<!-- /Language Widget -->

							<!-- About Widget -->
							<div class="pro-post widget-box about-widget">
								<h4 class="pro-title mb-0">About Me</h4>
								<ul class="latest-posts pro-content">
									<li><p>Gender</p><h6>Male</h6></li>
									<li><p>Experience</p><h6>5 Years</h6></li>
									<li><p>Location</p><h6>Istanbul/Turkey</h6></li>
								</ul>
							</div>
							<!-- /About Widget -->

							<!-- Categories -->
							<div class="pro-post category-widget">
								<div class="widget-title-box">
									<h4 class="pro-title">Social Links</h4>
								</div>
									<ul class="latest-posts pro-content mb-3">
										<li><a href="#">http://www.facebook.com/john...</a></li>
										<li><a href="#">http://www.Twitter.com/john...</a></li>
										<li><a href="#">Http://www.googleplus.com/john... </a></li>
										<li><a href="#"> Http://www.behance.com/john...</a></li>
										<li><a href="#"> Http://www.pinterest.com/john...</a></li>
									</ul>
							</div>
							<!-- /Categories -->

							<!-- LInk Widget -->
							<div class="pro-post widget-box post-widget">
								<h3 class="pro-title">Profile Link</h3>
								<div class="pro-content">
									<div class="form-group profile-group mb-0">
									<div class="input-group">
										<input type="text" class="form-control" value="https://www.DressMaker.com/developer/daren/12454687">
										<div class="input-group-append">
											<button class="btn btn-success sub-btn" type="submit"><i class="fa fa-clone"></i></button>
										</div>
									</div>
									</div>
								</div>
							</div>
							<!-- /Link Widget -->

							<!-- Share Widget -->
							<div class="pro-post widget-box post-widget">
								<h3 class="pro-title">Share</h3>
								<div class="pro-content">
									<a href="#" class="share-icon"><i class="fas fa-share-alt"></i> Share</a>
								</div>
							</div>
							<!-- /Share Widget -->

						</div>
						<!-- /Blog Sidebar -->

					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->

		<!-- The Modal -->
		<div class="modal fade custom-modal" id="hire">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content bg-modal">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center pt-0 mb-4">
							<img src="/assets/img/logo-01.png" alt="logo" class="img-fluid mb-1">
							<h5 class="modal-title">Discuss your project with David</h5>
						</div>
						<form action="dashboard">
							<div class="modal-info">
								<div class="row">
									<div class="col-12 col-md-12">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="First name & Lastname">
										</div>
										<div class="form-group">
											<input type="email" name="name" class="form-control" placeholder="Email Address">
										</div>
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Phone Number">
										</div>
										<div class="form-group">
											<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
										</div>
										<div class="form-group row">
											<div class="col-12 col-md-4 pr-0">
												<label class="file-upload">
													Add Attachment <input type="file" />
												</label>
											</div>
											<div class="col-12 col-md-8">
												<p class="mb-1">Allowed file types: zip, pdf, png, jpg</p>
												<p>Max file size: 50 MB</p>
											</div>
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
		<!-- /The Modal -->
@endsection
