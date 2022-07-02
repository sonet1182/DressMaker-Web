<?php $page="contact";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Contact US</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"> Contact</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- About -->
			<section class="section about">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-6 d-flex align-items-center">
							<div class="about-content">
								<h2>Contact</h2>
                                <hr>
								<p>
                                    <h5 class="text-primary">New York, USA (HQ)</h5>
                                    <p>
                                        750 Sing Sing Rd, Horseheads, NY, 14845<br>
                                        Call: 469-537-2410 (Toll-free)
                                    </p>

                                    <h5 class="text-primary">Sydney, Australia</h5>
                                    <p>
                                        24 Farrar Parade COOROW WA 6515<br>
                                        Call: (08) 9064 9807 (Toll-free)
                                    </p>
                                </p>
							</div>
						</div>
						<div class="offset-lg-1 col-lg-5">
							<div class="about-img">
								<img class="img-fluid" src="/assets/img/about.png" alt="Post Image">
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /About -->



			<!-- Agency -->
			{{-- <section class="section agency">
				<div class="container-fluid">
					<div class="row align-items-center black-bg">
						<div class="col-md-6 agency-box">
							<img src="/assets/img/about-01.jpg" alt="" class="img-fluid">
						</div>
						<div class="col-md-6 agency-box black-bg">
							<div class="agency-content">
								<h2>Used by over <span class="orange-text">1500</span> of World Leading Agencies work</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam dui, nibh faucibus aenean.</p>
								<a href="project" class="btn learn-btn">LEARN MORE</a>
							</div>
						</div>
					</div>
				</div>
			</section> --}}
			<!-- / Agency -->

			<!-- Experts -->
			{{-- <section class="section expert">
				<div class="container">
					<div class="row">
						<div class="col-md-8 mx-auto">
							<h5>SINCE THE START</h5>
							<h2>We Provide Stable Service With Experts</h2>
							<p>Experience state-of-the-art marketplace platform with the Exertio. We combine the experience of our global community around the globe for a best marketplace theme.</p>
							<p>With Exertio, you can develop a website for remote freelancers that will provide their best to the clients who are looking for remote resources.</p>
							<div class="btn-item">
								<a class="btn get-btn" href="/login">Get Started</a>
								<a class="btn courses-btn" href="project">ViEW SERVICES</a>
							</div>
						</div>
					</div>
				</div>
			</section> --}}
			<!-- /Experts -->


        </div>
		<!-- /Main Wrapper -->
@endsection
