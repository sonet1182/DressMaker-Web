<?php $page="freelancer-review";?>
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
							<div class="card">
								<div class="card-header">
									<h3 class="pro-title without-border">Reviews</h3>
								</div>
								<div class="card-body">
									<div class="reviews">

                                        @foreach ($reviews as $review)
                                        <div class="review-content no-padding">
											<h4>{{ $review->sender->name ?? '' }}</h4>
											<div class="rating">
												<span class="average-rating">{{ number_format($review->ratings, 2.2) }}</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">{{ $review->review }}</p>
										</div>
                                        @endforeach


									</div>
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>
			<!-- /Page Content -->

        </div>
		<!-- /Main Wrapper -->
@endsection
