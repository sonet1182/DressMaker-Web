<?php $page="blog-details";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Blog Details</h2>
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
							<div class="blog-view">
								<div class="blog-single-post pro-post widget-box">
									<div class="blog-image">
										<a href="javascript:void(0);"><img alt="" src="/assets/img/blog/blog-01.jpg" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">Your next job starts right here</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="developer-details"><img src="/assets/img/img-02.jpg" alt="Post Author"><span>John Doe</span></a>
													</div>
												</li>
												<li><a href="#"><i class="far fa-calendar"></i>4 May 2021</a></li>
												<li><a href="#"><i class="far fa-comments"></i>12 Comments</a></li>
												<li><i class="fas fa-tags"></i>Study Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
									</div>
								</div>

								<div class="pro-post author-widget clearfix">
									<div class="widget-title-box clearfix">
										<h3 class="pro-title">About Author</h3>
									</div>
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="developer-details"><img class="img-fluid" alt="" src="/assets/img/img-02.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="developer-details" class="blog-author-name">Web Designer</a>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
											<div class="social-links">
												<ul>
													<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#"><i class="fab fa-behance"></i></a></li>
													<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="blog-comments pro-post widget-box clearfix pb-0">
									<h3 class="pro-title">Comments (12)</h3>
									<div class="pro-content pb-0">
									<ul class="comments-list">
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="" src="/assets/img/img-02.jpg">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Michelle Fairfax <span class="date">Jun 6, 2021</span></span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
												</div>
											</div>
											<ul class="comments-list reply">
												<li>
													<div class="comment">
														<div class="comment-author">
															<img class="avatar" alt="" src="/assets/img/img-03.jpg">
														</div>
														<div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Gina Moore <span class="date">Jun 6, 2021</span></span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<a class="comment-btn" href="#">
																<i class="fas fa-reply"></i> Reply
															</a>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="comment-author">
															<img class="avatar" alt="" src="/assets/img/img-04.jpg">
														</div>
														<div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Carl Kelly <span class="date">Jun 6, 2021</span></span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<a class="comment-btn" href="#">
																<i class="fas fa-reply"></i> Reply
															</a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="" src="/assets/img/img-05.jpg">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Elsie Gilley <span class="date">Jun 6, 2021</span></span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
												</div>
											</div>
										</li>
									</ul>
								</div>
								</div>

								<div class=" pro-post widget-box  new-comment clearfix">
									<h4 class="pro-title">Leave Comment</h4>
									<div class="pro-content">
										<form>
											<div class="form-group">
												<label>Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Your Email Address <span class="text-danger">*</span></label>
												<input type="email" class="form-control">
											</div>
											<div class="form-group">
												<label>Comments</label>
												<textarea rows="4" class="form-control"></textarea>
											</div>
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" type="submit">Submit</button>
											</div>
										</form>
									</div>
								</div>

							</div>
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
													<img class="img-fluid" src="/assets/img/blog/blog-thumb-03.jpg" alt="">
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
													<img class="img-fluid" src="/assets/img/blog/blog-thumb-02.jpg" alt="">
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
													<img class="img-fluid" src="/assets/img/blog/blog-thumb-01.jpg" alt="">
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
									<div class="tags">
										<a href="#" class="tag">Employer</a>
										<a href="#" class="tag">Student</a>
										<a href="#" class="tag">Freelancer</a>
										<a href="#" class="tag">Designer</a>
										<a href="#" class="tag">Jobs</a>
										<a href="#" class="tag">Developer</a>
										<a href="#" class="tag">Coding</a>
										<a href="#" class="tag">Skills</a>
										<a href="#" class="tag">Knowledge</a>
										<a href="#" class="tag">Node Js</a>
										<a href="#" class="tag">Courses</a>
										<a href="#" class="tag">Engineer</a>
										<a href="#" class="tag">Online</a>
										<a href="#" class="tag">Study</a>
										<a href="#" class="tag">Project</a>
										<a href="#" class="tag">Experience</a>
										<a href="#" class="tag">Freshers</a>
									</div>
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
