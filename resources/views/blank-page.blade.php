<?php $page="blank-page";?>
@extends('layout.mainlayout')
@section('content')


<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blank Page</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Blank Page</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

			<!-- Page Content -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h5>Blank Page</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->


        </div>
		<!-- /Main Wrapper -->
@endsection
