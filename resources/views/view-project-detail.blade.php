<?php $page = 'milestones'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row" style="margin-top: 60px">

                @include('buyer.sidebar')

                <!-- sidebar -->
                <!--<div class="col-xl-3 col-md-4 theiaStickySidebar">-->
                <!--	<div class="settings-widget">-->
                <!--		<div class="settings-header d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">-->
                <!--			<a href="{{ route('employer.profile') }}"><img alt="profile image" src="/assets/img/img-04.jpg" class="avatar-lg rounded-circle"></a>-->
                <!--			<div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">-->
                <!--				<p class="mb-2">Welcome,</p>-->
                <!--				<a href="{{ route('employer.profile') }}"><h3 class="mb-0">John Danie S.</h3></a>-->
                <!--				<p class="mb-0">@johndaniee</p>-->
                <!--			</div>-->
                <!--		</div>-->
                <!--		<div class="settings-menu">-->
                <!--			<ul>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="dashboard" class="nav-link">-->
                <!--						<i class="material-icons">verified_user</i> Dashboard-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href={{ route('employer.manage-projects') }} class="nav-link active">-->
                <!--						<i class="material-icons">business_center</i> Projects-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="favourites" class="nav-link">-->
                <!--						<i class="material-icons">local_play</i> Favourites-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="review" class="nav-link">-->
                <!--						<i class="material-icons">record_voice_over</i> Reviews-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="chats" class="nav-link">-->
                <!--						<i class="material-icons">chat</i> Messages-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="membership-plans" class="nav-link">-->
                <!--						<i class="material-icons">person_add</i> Membership-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="milestones" class="nav-link">-->
                <!--						<i class="material-icons">pie_chart</i> Milestones-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="verify-identity" class="nav-link">-->
                <!--						<i class="material-icons">person_pin</i> Verify Identity-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="deposit-funds" class="nav-link">-->
                <!--						<i class="material-icons">wifi_tethering</i> Payments-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="profile-settings" class="nav-link">-->
                <!--						<i class="material-icons">settings</i> Settings-->
                <!--					</a>-->
                <!--				</li>-->
                <!--				<li class="nav-item">-->
                <!--					<a href="{{ route('home') }}" class="nav-link">-->
                <!--						<i class="material-icons">power_settings_new</i> Logout-->
                <!--					</a>-->
                <!--				</li>-->
                <!--			</ul>-->
                <!--		</div>-->
                <!--	</div>-->
                <!--</div>-->
                <!-- /sidebar -->

                <div class="col-xl-9 col-md-8 mx-auto">
                    {{-- <nav class="user-tabs mb-4">
                        <ul class="nav nav-tabs nav-tabs-bottom nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" href="view-project-detail">Overview & Discussions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="milestones">Milestones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tasks">Tasks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="files">Files</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="project-payment">Payments</a>
                            </li>
                        </ul>
                    </nav> --}}

                    <!-- project list -->
                    <div class="my-projects">


                        <!-- project list -->
                        <div class="my-projects-list pro-list-view">
                            <div class="row">
                                <div class="col-lg-10 flex-wrap">
                                    <div class="projects-card flex-fill">
                                        <div class="card-body">
                                            <div class="projects-details align-items-center">
                                                <div class="project-info">
                                                    <h2>{{ $project->title }}</h2>
                                                    <div class="customer-info">
                                                        <ul class="list-details">
                                                            <li>
                                                                <div class="slot">
                                                                    <p>Price type</p>
                                                                    <h5>{{ $project->pricing_type->name ?? '' }}</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="slot">
                                                                    <p>Posted On</p>
                                                                    <h5>{{ $project->created_at->format('h:i A | d,M Y') }}
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="slot">
                                                                    <p>Pediod</p>
                                                                    <h5>{{ \Carbon\Carbon::parse($project->started_at)->format('d,M Y') }}
                                                                        -
                                                                        {{ \Carbon\Carbon::parse($project->started_at)->format('d,M Y') }}
                                                                    </h5>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="project-hire-info">
                                                    <div class="content-divider"></div>
                                                    <div class="projects-amount">
                                                        <h2 class="text-danger">${{ number_format($project->price, 2) }}
                                                        </h2>
                                                    </div>
                                                    <div class="content-divider"></div>
                                                    <div class="projects-action text-center">
                                                        <a href="#" class="hired-detail">Hired on
                                                            {{ $project->hired_at ? $project->hired_at->format('h:i A | d,M Y') : '' }}</a>
                                                        <div class="pro-status">
                                                            <div class="hire-select">
                                                                <select class="form-control select">
                                                                    <option> Is job completed? </option>
                                                                    <option>Ongoing</option>
                                                                    <option>Completed</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 d-flex flex-wrap">
                                    <div class="projects-card flex-fill">
                                        <div class="card-body">
                                            <div class="prj-proposal-count text-center hired">
                                                <img src="{{ $project->hired->profile_photo ? asset($project->hired->profile_photo) : '' }}"
                                                    alt="" class="img-fluid">
                                                <p class="mb-2">{{ $project->hired ? $project->hired->name : '' }}</p>
                                                <a href="chats" class="btn btn-chat">Chat Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /project list -->

                    </div>

                    <div class="pro-post widget-box">
                        <h3 class="pro-title">Overview</h3>
                        <div class="pro-overview">
                            {!! $project->description !!}
                        </div>
                    </div>

                    <div class="pro-post widget-box">
                        <h3 class="pro-title">Skills Required</h3>
                        <div class="pro-content">
                            <div class="tags">

                                @foreach (explode(',', $project->area) as $area)
                                    <span class="badge badge-pill badge-design">{{ $area }}</span>
                                @endforeach

                            </div>
                        </div>
                    </div>

                </div>
                <!-- project list -->

            </div>
        </div>
    </div>

    <!-- /Page Content -->


    </div>
    <!-- /Main Wrapper -->
@endsection
