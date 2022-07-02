<?php $page = 'freelancer-project-proposals'; ?>
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
                    <div class="page-title">
                        <h3>Proposals</h3>
                    </div>
                    <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('designer.projects') }}">My Proposals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-ongoing-projects">Ongoing Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-completed-projects">Completed Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="freelancer-cancelled-projects">Cancelled Projects</a>
                            </li>
                        </ul>
                    </nav>

                    <!-- Proposals list -->
                    <div class="proposals-section">
                        <h3 class="page-subtitle">My Proposals</h3>

                        @foreach ($projects as $project)
                            <div class="freelancer-proposals">
                                <div class="project-proposals align-items-center freelancer">
                                    <div class="proposals-info">
                                        <div class="proposals-detail">
                                            <h3 class="proposals-title">{{ $project->title }}
                                            </h3>
                                            <div class="proposals-content">
                                                <div class="proposal-img">
                                                    <div class="text-md-center">
                                                        <img src="{{ $project->user && $project->user->profile_photo ? $project->user->profile_photo : '' }}" alt=""
                                                            class="img-fluid">
                                                        <h4>{{ $project->user ? $project->user->name : '' }}</h4>
                                                        <span class="info-btn">client</span>
                                                    </div>
                                                </div>
                                                <div class="proposal-client">
                                                    <h4 class="title-info">Client Price</h4>
                                                    <h2 class="client-price">${{ number_format($project->price, 2) }}</h2>
                                                    {{-- <span class="price-type">( {{ $project->pricing_type ? $project->pricing_type->name : '' }} )</span> --}}
                                                </div>
                                                <div class="proposal-type">
                                                    <h4 class="title-info">Job Type</h4>
                                                    <h3>{{ $project->pricing_type ? $project->pricing_type->name : '' }}</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="project-hire-info">
                                            <div class="content-divider-1"></div>
                                            <div class="projects-amount">
                                                <p>Your Price</p>
                                                <h3>$500.00</h3>

                                            </div>
                                            <div class="content-divider-1"></div>
                                            <div class="projects-action text-center">
                                                <a data-bs-toggle="modal" href="#file" class="projects-btn">Edit Proposals
                                                </a>
                                                <a href="freelancer-view-project-detail.html" class="projects-btn">View
                                                    Project</a>
                                                <a href="#" class="proposal-delete">Delete Proposal</a>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="description-proposal">
                                        <h5 class="desc-title">Description</h5>
                                        <p>{!! $project->description !!}<a href="#"
                                                class="text-primary font-bold">Readmore</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        @endforeach



                    </div>
                    <!-- /Proposals list -->



                </div>
            </div>
        </div>
    </div>

    <!-- /Page Content -->

    <!-- The Modal -->
    <div class="modal fade" id="file">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">EDIT PROPOSAL</h4>
                    <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times-circle"></i></a></span>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="modal-info">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cost</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Days</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control summernote" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-end">
                            <button type="submit" class="btn btn-primary submit-btn">Save Proposal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->


    </div>
    <!-- /Main Wrapper -->
@endsection
