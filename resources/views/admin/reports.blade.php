<?php $page="reports";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col-lg-6">
								<h3 class="page-title">Reports</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
									<li class="breadcrumb-item active">Reports</li>
								</ul>
							</div>
							<div class="col-lg-6 report-btns">
								<a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
									<i class="fas fa-filter"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- Search Filter -->
					<div class="card filter-card" id="filter_inputs">
						<div class="card-body pb-0">
							<form action="#" method="post">
								<div class="row filter-row">
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>Client</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>From Date</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<label>To Date</label>
											<div class="cal-icon">
												<input class="form-control datetimepicker" type="text">
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="form-group">
											<button class="btn btn-primary btn-block" type="submit">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /Search Filter -->

					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-center table-hover mb-0 datatable">
											<thead>
												<tr>
													<th></th>
													<th>ID</th>
													<th>Clinet</th>
													<th>Type</th>
													<th>Invoice No</th>
													<th>Transaction Fee</th>
													<th>Amount</th>
													<th>Status</th>
													<th>Date</th>
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck2">
														  <label class="form-check-label" for="customCheck2"></label>
														</div>
													</td>
													<td>C1</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">George Wells</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 643351646848	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0001</a>
													</td>
													<td>$ 5.00</td>
													<td>
														$2222.00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Complete</a>
													</td>
													<td>2022-05-07 06:56:22</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck1">
														  <label class="form-check-label" for="customCheck1"></label>
														</div>
													</td>
													<td>C2</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Paul Sutliff</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 643351646848	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0002</a>
													</td>
													<td>$ 2.50</td>
													<td>
														$1500.00
													</td>
													<td>
														<a href="#" class="btn btn-disable">In Complete</a>
													</td>
													<td>2022-05-07 04:23:22</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck5">
														  <label class="form-check-label" for="customCheck5"></label>
														</div>
													</td>
													<td>C3</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Albert Boone</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 1521541123	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0003</a>
													</td>
													<td>$ 3.50</td>
													<td>
														$2500.00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Complete</a>
													</td>
													<td>2022-05-07 05:23:12</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck3">
														  <label class="form-check-label" for="customCheck3"></label>
														</div>
													</td>
													<td>C4</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Jessie Montoya</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 83233521241	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0004</a>
													</td>
													<td>$ 4.00</td>
													<td>
														$3025.00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Complete</a>
													</td>
													<td>2022-05-07 04:20:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck4">
														  <label class="form-check-label" for="customCheck4"></label>
														</div>
													</td>
													<td>C5</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Floyd Lewis</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 747573521241	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0005</a>
													</td>
													<td>$ 4.00</td>
													<td>
														$4567.00
													</td>
													<td>
														<a href="#" class="btn btn-disable">In Complete</a>
													</td>
													<td>2022-05-07 04:21:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck6">
														  <label class="form-check-label" for="customCheck6"></label>
														</div>
													</td>
													<td>C6</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Tony Ingle</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 747573521241	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0006</a>
													</td>
													<td>$ 4.00</td>
													<td>
														$4567.00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Complete</a>
													</td>
													<td>2022-05-07 04:21:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck7">
														  <label class="form-check-label" for="customCheck7"></label>
														</div>
													</td>
													<td>C7</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Jessie Montoya</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 64343848697060	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0007</a>
													</td>
													<td>$ 4.00</td>
													<td>
														$2334.00
													</td>
													<td>
														<a href="#" class="btn btn-disable">In Complete</a>
													</td>
													<td>2022-05-07 04:21:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck8">
														  <label class="form-check-label" for="customCheck8"></label>
														</div>
													</td>
													<td>C8</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Albert Boone</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 756756858690	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0008</a>
													</td>
													<td>$ 4.00</td>
													<td>
														$5423.00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Complete</a>
													</td>
													<td>2022-05-07 04:21:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck9">
														  <label class="form-check-label" for="customCheck9"></label>
														</div>
													</td>
													<td>C9</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Kathleen Kaiser</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 76767678234	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0009</a>
													</td>
													<td>$ 40.00</td>
													<td>
														$5657.00
													</td>
													<td>
														<a href="#" class="btn btn-disable">In Complete</a>
													</td>
													<td>2022-05-07 04:21:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck10">
														  <label class="form-check-label" for="customCheck10"></label>
														</div>
													</td>
													<td>C10</td>
													<td>
														<h2 class="table-avatar">
															<a href="#">Floyd Lewis</a>
														</h2>
													</td>
													<td>
														<p class="white-space mb-0">Bank Transfer, Payment Transaction
															ID - 747573533468	</p>
													</td>
													<td>
														<a href="view-invoice">INV 0010</a>
													</td>
													<td>$ 4.00</td>
													<td>
														$343.00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Complete</a>
													</td>
													<td>2022-05-07 04:21:15</td>
													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- /Page Wrapper -->
			</div>
        </div>
		<!-- /Main Wrapper -->
		<!-- The Modal -->
		<div class="modal fade custom-modal" id="add-category">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">

				<div class="modal-header">
					<h4 class="modal-title">Edit Reports</h4>
					<button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
				</div>

				<div class="modal-body">
					<form>
						<div class="form-group">
							<label>Client Name</label>
							<input type="text" class="form-control" value="Davis Payerf">
						</div>
						<div class="form-group">
							<label>Type</label>
							<input type="text" class="form-control" value="Bank Transfer, Payment Transaction ID - 643351646848">
						</div>
						<div class="form-group">
							<label>Transaction Fee</label>
							<input type="text" class="form-control" value="$ 5.00">
						</div>
						<div class="form-group">
							<label>Amount</label>
							<input type="text" class="form-control" value="$2222.00">
						</div>
						<div class="form-group">
							<label>status</label>
							<select class="form-control form-select">
								<option>Complete</option>
								<option selected>Incomplete</option>
							</select>
						</div>
						<div class="mt-4">
							<button type="submit" class="btn btn-primary btn-block">Submit</button>
						</div>
					</form>
				</div>
		    </div>
		  </div>
		</div>

		<!-- Delete Modal -->
		<div class="modal custom-modal fade" id="delete_category" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-header">
							<h3>Delete</h3>
							<p>Are you sure want to delete?</p>
						</div>
						<div class="modal-btn delete-action">
							<div class="row">
								<div class="col-6">
									<a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
								</div>
								<div class="col-6">
									<a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->
@endsection
