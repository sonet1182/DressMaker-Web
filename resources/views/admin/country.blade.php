<?php $page = 'countries'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Countries</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Countries</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="#" class="btn add-button me-2" data-bs-toggle="modal" data-bs-target="#add-category">
                            <i class="fas fa-plus"></i>
                        </a>
                        <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Search Filter -->
            <div class="card filter-card" id="filter_inputs">
                <div class="card-body pb-0">
                    <form action="#" method="post">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Add countries</label>
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
                                <div class="table-responsive">
                                    <table class="table table-center table-hover mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Country Name</th>
                                                <th>Image</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($countries as $country)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>{{ $country->name }}</td>
                                                    <td>
                                                        <image src="{{ asset($country->image) }}" hight="90px" width="90px"/>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-secondary me-2"
                                                            data-bs-toggle="modal" data-bs-target="#edit-category{{ $country->id }}"><i
                                                                class="far fa-edit"></i></a>
                                                        <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                            data-bs-toggle="modal" data-bs-target="#delete_category"><i
                                                                class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>


                                                <!-- Edit Modal -->
                                                <div class="modal fade custom-modal" id="edit-category{{ $country->id }}">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Country</h4>
                                                                <button type="button" class="close"
                                                                    data-bs-dismiss="modal"><span>&times;</span></button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                                <form action="{{ route('admin.country.update', $country->id) }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label>Country Name</label>
                                                                        <input type="text" class="form-control" name="name"
                                                                            value="{{ $country->name }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <image src="{{ asset($country->image) }}" hight="90px" width="90px" id="flag{{ $country->id }}"/>
                                                                        <label>Image</label>
                                                                        <input type="file" class="form-control" name="image" onchange="document.getElementById('flag{{ $country->id }}').src = window.URL.createObjectURL(this.files[0])">
                                                                    </div>
                                                                    <div class="mt-4">
                                                                        <button type="submit"
                                                                            class="btn btn-primary btn-block">Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /Edit Modal -->
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
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

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Country</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="{{ route('admin.country.add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Country Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Country Name">
                        </div>

                        <div class="form-group">
                            <image src="" hight="90px" width="90px" id="flag1"/>
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" onchange="document.getElementById('flag1').src = window.URL.createObjectURL(this.files[0])">
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->




    <!--Deelte modal-->

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
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
