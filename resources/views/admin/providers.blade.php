<?php $page="providers";?>
@extends('layout.mainlayout_admin')
@section('content')
	<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Buyer</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index_admin">Home</a></li>
									<li class="breadcrumb-item active">Buyer</li>
								</ul>
							</div>
							<div class="col-auto">
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
											<label>Company Name</label>
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
													<th>Logo</th>
													<th>Name</th>
													<th>Primary contact</th>
													<th>Mail</th>
													<th>Total Projects</th>
													<th>Status</th>
													<th class="text-end">Actions</th>
												</tr>
											</thead>
											<tbody>

                                                @foreach ($users as $user)

                                                <tr>
													<td>
														<div class="form-check custom-checkbox">
														  <input type="checkbox" class="form-check-input" id="customCheck5">
														  <label class="form-check-label" for="customCheck5"></label>
														</div>
													</td>
													<td>C1</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);"><img class="me-2" src="../assets_admin/img/company/img-1.png" alt="User Image"></a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="javascript:void(0);">{{ $user->name }}</a>
														</h2>
													</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile">
																+8801732379393
															</a>
														</h2>
													</td>
													<td>{{ $user->email }}</td>
													<td>
														00
													</td>
													<td>
														<a href="#" class="btn btn-enable">Enabled</a>
													</td>

													<td class="text-end">
														<a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2" data-bs-toggle="modal" data-bs-target="#add-category"><i class="far fa-edit"></i></a>
														<a href="javascript:void(0);" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#delete_category"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>

                                                @endforeach


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
		<!-- Category Modal -->
		<div class="modal fade custom-modal" id="add-category">
		  <div class="modal-dialog modal-dialog-centered">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header flex-wrap">
		        <h4 class="modal-title">Edit Provider</h4>
		        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		     	<form>
					<div class="form-group">
						<label>Company Name</label>
						<input type="text" class="form-control" value="Focused Holistic Hardware">
					</div>
					<div class="form-group">
						<label>Primary Contact</label>
						<input type="text" class="form-control" value="Emily Smith">
					</div>
					<div class="form-group">
						<label>Website</label>
						<input type="text" class="form-control" value="https://focusedhardware.de">
					</div>
					<div class="form-group">
						<label>Total Projects</label>
						<input type="text" class="form-control" value="120">
					</div>
					<div class="form-group">
						<label>Status</label>
						<select class="form-control form-select">
							<option selected>Enabled</option>
							<option>Disable</option>
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
		<!-- /Category Modal -->

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
