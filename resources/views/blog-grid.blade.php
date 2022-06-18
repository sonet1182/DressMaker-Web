<?php $page="blog-grid";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Blog Grid</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog</li>
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
						<div class="col-lg-8 col-md-12">

							<div class="row blog-grid-row">
								<div class="col-md-6 col-sm-12">

									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-01.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="assets/img/img-02.jpg" alt="Post Author"> <span> David Lee</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 4 Apr 2021</li>
											</ul>
											<h3 class="blog-title"><a href="blog-details">Your next job starts right here</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->

								</div>
								<div class="col-md-6 col-sm-12">

									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-02.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="assets/img/img-03.jpg" alt="Post Author"> <span> Deborah Angel</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 3 Mar 2021</li>
											</ul>
											<h3 class="blog-title"><a href="blog-details">People who completed NAND?</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->

								</div>
								<div class="col-md-6 col-sm-12">

									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-03.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="assets/img/img-04.jpg" alt="Post Author"> <span>Darren Elder</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 3 Dec 2021</li>
											</ul>
											<h3 class="blog-title"><a href="blog-details">DressMaker - How to get job through online?</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->

								</div>
								<div class="col-md-6 col-sm-12">

									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-04.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="assets/img/img-05.jpg" alt="Post Author"> <span>Sofia Brient</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 2 Dec 2021</li>
											</ul>
											<h3 class="blog-title"><a href="blog-details">Job Openings in top Companies</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->

								</div>
								<div class="col-md-6 col-sm-12">

									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-05.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="assets/img/img-02.jpg" alt="Post Author"> <span>Marvin Campbell</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 1 Dec 2021</li>
											</ul>
											<h3 class="blog-title"><a href="blog-details">How to crack the interview easily - DressMaker</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->

								</div>
								<div class="col-md-6 col-sm-12">

									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="blog-details"><img class="img-fluid" src="assets/img/blog/blog-06.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="assets/img/img-03.jpg" alt="Post Author"> <span> Paul Berthold</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 3 Nov 2021</li>
											</ul>
											<h3 class="blog-title"><a href="blog-details">Recommended technical languages to study</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</div>
									<!-- /Blog Post -->

								</div>
							</div>

							<!-- Blog Pagination -->
							<div class="row pb-4">
								<div class="col-md-12">
									<div class="blog-pagination text-center">
										<ul class="paginations">
											<li><a href="#"> <i class="fas fa-angle-left"></i> Previous</a></li>
											<li><a href="#">1</a></li>
											<li><a href="#" class="active">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">Next <i class="fas fa-angle-right"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Blog Pagination -->

						</div>

						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Latest Posts -->
							<div class=" pro-post widget-box post-widget">
								<h4 class="pro-title">Latest Posts</h4>
								<div class="pro-content pt-0">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">DressMaker - How to get job through online?</a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 2 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">People who completed NAND technology got job 90% </a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 3 May 2021</a>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details">There are many variations of passages</a>
												</h4>
												<a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 4 May 2021</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class=" pro-post widget-box category-widget">
								<h4 class="pro-title">Blog Categories</h4>
								<div class="pro-content">
									<ul class="category-link">
										<li><a href="#">Web Development</a></li>
										<li><a href="#">IT Consultancy</a></li>
										<li><a href="#">Email Marketing</a></li>
										<li><a href="#">Business Consulting</a></li>
										<li><a href="#">Apps Development</a></li>
										<li><a href="#">SEO Optimizations</a></li>
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Tags -->
							<div class=" pro-post widget-box tags-widget">
								<h4 class="pro-title">Tags</h4>
								<div class="pro-content">
									<ul class="tags">
										<li><a href="#" class="tag">Employer</a></li>
										<li><a href="#" class="tag">Student</a></li>
										<li><a href="#" class="tag">Freelancer</a></li>
										<li><a href="#" class="tag">Designer</a></li>
										<li><a href="#" class="tag">Jobs</a></li>
										<li><a href="#" class="tag">Developer</a></li>
										<li><a href="#" class="tag">Coding</a></li>
										<li><a href="#" class="tag">Skills</a></li>
										<li><a href="#" class="tag">Knowledge</a></li>
										<li><a href="#" class="tag">Node Js</a></li>
										<li><a href="#" class="tag">Courses</a></li>
										<li><a href="#" class="tag">Engineer</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Study</a></li>
										<li><a href="#" class="tag">Project</a></li>
										<li><a href="#" class="tag">Experience</a></li>
										<li><a href="#" class="tag">Freshers</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->

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
@endsection
