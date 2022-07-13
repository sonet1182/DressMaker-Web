<?php $page = 'providers'; ?>
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Buyer</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        {{-- <a class="btn filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a> --}}
                    </div>
                </div>
                <div class="row">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
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
                                            <th>Id</th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Mail</th>
                                            <th>Total Projects</th>
                                            <th>Status</th>
                                            <th>Joined At</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->id }}
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <img class="me-2"
                                                            src="{{ $user->profile_photo ? asset($user->profile_photo) : '/assets/img/img-02.jpg' }}"
                                                            alt="">
                                                    </h2>
                                                </td>
                                                <td>
                                                    <h2 class="table-avatar">
                                                        <a href="javascript:void(0);">{{ $user->name }}</a>
                                                    </h2>
                                                </td>

                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    {{ $user->post ? number_format($user->post->count()) : '' }}
                                                </td>
                                                <td>
                                                    @if($user->verify == 1)
                                                    <a  class="badge badge-pill badge-success">Verified</a>
                                                    @else
                                                    <a  class="badge badge-pill badge-danger">Not Verified</a>
                                                    @endif
                                                </td>

                                                <td>
                                                    {{ $user->created_at->format('h:i A | d,M Y') }}
                                                </td>

                                                <td class="text-end">

                                                    @if($user->verify == 1)
                                                    <a href="{{ url('/admin/dis_verify_user/'.$user->id) }}" class="btn btn-sm btn-danger me-2"><i
                                                        class="fas fa-times"></i> Reject</a>
                                                    @else
                                                    <a href="{{ url('/admin/verify_user/'.$user->id) }}" class="btn btn-sm btn-success me-2"><i
                                                        class="fas fa-check"></i> Verify</a>
                                                    @endif
                                                    {{-- <a href="javascript:void(0);" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal" data-bs-target="#delete_category"><i
                                                            class="far fa-trash-alt"></i></a> --}}
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
    <div class="modal fade custom-modal" id="add-category{{ $user->id }}">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header flex-wrap">
                    <h4 class="modal-title">Edit Provider</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="">
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
                            <label>Profile Status</label>
                            <select class="form-control form-select">
                                <option value="1">Set Verification</option>
                                <option value="0">Reject Verification</option>
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
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Modal -->
@endsection
