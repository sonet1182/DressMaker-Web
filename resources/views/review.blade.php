<?php $page="review";?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row" style="margin-top: 60px">

						@include('buyer.sidebar')

						<div class="col-xl-9 col-md-8">
							<div class="card">
								<div class="card-header">
									<h3 class="pro-title without-border">Reviews</h3>
								</div>
								<div class="card-body">
									<div class="reviews">
										<div class="review-content no-padding">
											<h4>Fix Python Selenium Code</h4>
											<div class="rating">
												<span class="average-rating">4.6</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">Great clarity in specification and communication. I got payment really fast. Really recommend this employer for his professionalism. I will work for him again with pleasure.</p>
										</div>
										<div class="review-content no-padding">
											<h4>Adsense Expert</h4>
											<div class="rating">
												<span class="average-rating">3.4</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">Great clarity in specification and communication. I got payment really fast. Really recommend this employer for his professionalism. I will work for him again with pleasure.</p>
										</div>
										<div class="review-content no-padding">
											<h4>Create website wordpress for a Brand</h4>
											<div class="rating">
												<span class="average-rating">4.2</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
										</div>
										<div class="review-content no-padding">
											<h4>Email automation set up and segmentation</h4>
											<div class="rating">
												<span class="average-rating">3.6</span>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<i class="fas fa-star"></i>
											</div>
											<p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
										</div>
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
		<!-- The Modal -->
		<div class="modal fade custom-modal" id="review">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center pt-0 mb-4">
							<h5 class="modal-title">Leave a Review</h5>
							<p class="modal-subtitle">Rate <span class="orange-text">Peter Valentín</span> for the project <span class="orange-text">Adsense Expert</span></p>
						</div>
						<form>
							<div class="modal-info">
								<div class="row form-row">
									<div class="col-12 col-md-12">
										<div class="form-group">
											<p class="mb-2">Was this delivered on budget?</p>
											<label class="custom_radio">
												<input type="radio" name="budget" value="Yes" checked>
												<span class="checkmark"></span> Yes
											</label>
											<label class="custom_radio">
												<input type="radio" name="budget" value="No">
												<span class="checkmark"></span> No
											</label>
										</div>
										<div class="form-group">
											<p class="mb-2">Was this delivered on time?</p>
											<label class="custom_radio">
												<input type="radio" name="time" value="Yes" checked>
												<span class="checkmark"></span> Yes
											</label>
											<label class="custom_radio">
												<input type="radio" name="time" value="No">
												<span class="checkmark"></span> No
											</label>
										</div>
										<div class="form-group">
											<p class="mb-2">Your Rating</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary btn-block submit-btn">Leave a Review</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal fade custom-modal" id="editreview">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center pt-0 mb-4">
							<h5 class="modal-title">Leave a Review</h5>
							<p class="modal-subtitle">Rate <span class="orange-text">Peter Valentín</span> for the project <span class="orange-text">Adsense Expert</span></p>
						</div>
						<form>
							<div class="modal-info">
								<div class="row form-row">
									<div class="col-12 col-md-12">
										<div class="form-group">
											<p class="mb-2">Was this delivered on budget?</p>
											<label class="custom_radio">
												<input type="radio" name="budget" value="Yes" checked>
												<span class="checkmark"></span> Yes
											</label>
											<label class="custom_radio">
												<input type="radio" name="budget" value="No">
												<span class="checkmark"></span> No
											</label>
										</div>
										<div class="form-group">
											<p class="mb-2">Was this delivered on time?</p>
											<label class="custom_radio">
												<input type="radio" name="time" value="Yes" checked>
												<span class="checkmark"></span> Yes
											</label>
											<label class="custom_radio">
												<input type="radio" name="time" value="No">
												<span class="checkmark"></span> No
											</label>
										</div>
										<div class="form-group">
											<p class="mb-2">Your Rating</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" name="message" rows="5" placeholder="Message">Great clarity in specification and communication. I got payment really fast. Really recommend this employer for his professionalism. I will work for him again with pleasure.</textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="submit-section text-center">
								<button type="submit" class="btn btn-primary btn-block submit-btn">Leave a Review</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection
