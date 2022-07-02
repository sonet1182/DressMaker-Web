<?php $page="freelancer-portfolio";?>
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

                            @if (session('status'))
                                <div class="alert alert-success mt-5" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

							<div class="portfolio-item">
								<div class="pro-head p-0 pb-4">
									<h3 class="mb-0">Portfolio</h3>
									<a class="btn btn-primary back-btn br-0" data-bs-toggle="modal" href="#portfolio">+ Add Portfolio</a>
								</div>
								<div class="pro-content pt-4 pb-4">
									<div class="row">

                                        @foreach ($portfolios as $portfolio)


										<div class="col-sm-6 col-lg-4">
											<div class="project-widget">
												<div class="portfolio-img">
													<img class="img-fluid" alt="User Image" src="{{ $portfolio->image ? asset($portfolio->image) : '/assets/img/project-1.jpg'}}">
													<div class="portfolio-live">
													<div class="portfolio-content">
														<a data-bs-toggle="modal" href="#portfolio-edit" class="port-icon"><i class="fas fa-pen"></i></a>
														<a href="#" class="port-icon"><i class="fas fa-trash-alt"></i></a>
													</div>
													</div>
												</div>
												<div class="portfolio-detail">
													<h3 class="pro-name">{{ $portfolio->title }}</h3>
												</div>
											</div>
										</div>

                                        @endforeach

									</div>
									<div class="col-md-12">
										{{ $portfolios->links() }}
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
		<div class="modal fade" id="portfolio">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4>Add Portfolio</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<div class="port-title">
							<h3>Simple & Best Way To Showcase Your Work</h3>
						</div>
						<form action="{{ route('designer.add_portfolio') }}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" name="title">
										</div>
										<div class="form-group">
											<label>Link</label>
											<input type="text" class="form-control" name="link">
										</div>
										<label class="br-0 file-upload image-upbtn">
											upload Files <input type="file" name="image">
										</label>
									</div>
								</div>
							</div>
							<div class="submit-section text-right">
								<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
								<button type="submit" class="btn btn-primary submit-btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- The Modal -->
		<div class="modal fade" id="portfolio-edit">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Portfolio</h4>
						<span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle orange-text"></i></a></span>
					</div>
					<div class="modal-body">
						<div class="port-title">
							<h3>Simple & Best Way To Showcase Your Work</h3>
						</div>
						<form action="freelancer-portfolio">
							<div class="modal-info">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" value="Portfolio Name">
										</div>
										<div class="form-group">
											<label>Link</label>
											<input type="text" class="form-control" value="Http://www.example.com//john...">
										</div>
										<label class="br-0 file-upload image-upbtn">
											upload Files <input type="file">
										</label>
									</div>
								</div>
							</div>
							<div class="submit-section text-right">
								<a data-bs-dismiss="modal" class="btn btn-primary black-btn submit-btn">Cancel</a>
								<a href="freelancer-portfolio" class="btn btn-primary submit-btn">Submit</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection
