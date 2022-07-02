<?php $page = 'project-details'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar"></div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">

        <div class="container">




            <div class="row">

                <div class="col-md-12">
                    <div class="profile">
                        <div class="profile-box">
                            <div class="provider-widget row">
                                @if (session('status'))
                                    <div class="alert alert-success mt-5" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="pro-info-left col-md-8">
                                    <div class="profile-info">
                                        <h2 class="profile-title">{{ $project->title }}</h2>
                                        <p class="profile-position">
                                            {{ $project->category ? $project->category->name : '' }}</p>
                                        <div></div>
                                        <ul class="profile-preword align-items-center">
                                            <li><i class="fas fa-clock"></i>
                                                &nbsp;{{ $project->created_at->format('h:i A | d,M Y') }}</li>
                                            <li><a href="#" class="btn full-btn">{{ $project->job_type }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-info-right profile-inf col-md-4">
                                    <ul class="profile-right">
                                        <li>
                                            <div class="amt-hr">${{ number_format($project->price) }} <p>( FIXED )</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-flex align-items-center justify-content-md-end justify-content-center">
                                        <a href="javascript:void(0)"><i
                                                class="fas fa-heart heart fa-2x me-2 orange-text"></i></a>

                                        @if ($applied)
                                            <span class="btn btn-outline-danger btn-lg px-2">Allready Applied!</span>
                                        @else
                                            <a data-bs-toggle="modal" href="#file" class="btn bid-btn"
                                                {{ !Auth::user() ? 'disabled' : '' }}>Send Proposal <i
                                                    class="fas fa-long-arrow-alt-right"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="pro-view">

                        <!-- Job Detail -->
                        <div class="post-widget">
                            <div class="pro-content">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="pro-post job-type">
                                            <p>Start Date</p>
                                            <h6> {{ \Carbon\Carbon::parse($project->start_date)->format('d,M Y') }} </h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="pro-post job-type">
                                            <p>End Date</p>
                                            <h6>{{ \Carbon\Carbon::parse($project->end_date)->format('d,M Y') }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="pro-post job-type">
                                            <p>Proposals</p>
                                            <h6>15 Received</h6>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="pro-post job-type">
                                            <p>Price type</p>
                                            <h6>{{ $project->pricing_type ? $project->pricing_type->name : '' }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Job Detail -->



                        <div class="pro-post widget-box exp-widget pb-0">

                            <h3 class="pro-title">Requirements</h3>

                            <div class="pro-content pt-0">
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="exp-detail">
                                            <img class="img-fluid" alt="" src="/assets/img/icon/exp-icon-04.png">
                                            <div class="exp-info">
                                                <p>Job Type</p>
                                                <h5>{{ $project->job_type }} Job</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="exp-detail">
                                            <img class="img-fluid" alt="" src="/assets/img/icon/exp-icon-05.png">
                                            <div class="exp-info">
                                                <p>Experience</p>
                                                <h5>+{{ $project->experience }} years</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="exp-detail">
                                            <img class="img-fluid" alt="" src="/assets/img/icon/exp-icon-06.png">
                                            <div class="exp-info">
                                                <p>Qualifications</p>
                                                <h5>{{ $project->qualification }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Senior Animator  -->
                        <div class="pro-post widget-box">
                            <h3 class="pro-title">Description</h3>
                            <div class="pro-content">
                                {{ $project->description }}
                            </div>
                        </div>
                        <!-- /Senior Animator  -->

                        <!-- Job Activity  -->
                        <div class="pro-post project-widget widget-box">
                            <h3 class="pro-title">Activity of the Job</h3>
                            <div class="pro-content">
                                <div class="mb-0">
                                    <ul class="activity-list clearfix">
                                        <li>Proposals: <span>Less than 5 <i class="fas fa-question-circle"
                                                    data-bs-toggle="tooltip" title="Lorem Ipsum"></i></span></li>
                                        <li>Last viewed by client: <span>3 hours ago <i class="fas fa-question-circle"
                                                    data-bs-toggle="tooltip" title="Lorem Ipsum"></i></span></li>
                                        <li>Interviewing: <span>1</span></li>
                                        <li>Invites sent: <span>6</span></li>
                                        <li>Unanswered invites: <span>2</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Job Activity  -->

                        <!-- Skills Required  -->
                        <div class="pro-post project-widget widget-box">
                            <h3 class="pro-title">Skills Required</h3>
                            <div class="pro-content">
                                <div class="tags">
                                    @foreach (explode(',', $project->area) as $area)
                                        <a href="javascript:void(0);"><span
                                                class="badge badge-pill badge-design">{{ $area }}</span></a>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                        <!-- /Skills Required  -->

                        <div class="pro-post widget-box">
                            <h3 class="pro-title">Project Proposals</h3>
                            <div class="average-bids mt-4">
                                <p><span class="text-highlight">{{ $total_proposals->count() }} Designers</span> are
                                    bidding with average <span
                                        class="text-highlight">${{ number_format($total_proposals->avg('budget'), 2) }}</span>
                                    for this job</p>
                            </div>
                            <div class="proposal-cards">

                                @foreach ($proposals as $proposal)
                                    @if ($project->user)
                                        <div class="bids-card">
                                            <div class="row align-items-center">
                                                <div class="col-lg-2">
                                                    <div class="author-img-wrap">
                                                        <a href="#">
                                                            <img class="img-fluid" alt=""
                                                                src="{{ $proposal->user->profile_photo ? asset($proposal->user->profile_photo) : '/assets/img/img-01.png' }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="author-detail">
                                                        <h4><a href="#">{{ $proposal->user->name }}</a> <small
                                                                style="font-size: 13px">({{ $proposal->user->address ? $proposal->user->address->country : '' }})</small>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="average-rating">4.3</span>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star filled"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <p class="mb-0">
                                                            {{ Str::limit($proposal->cover_letter, 100, $end = '.......') }}
                                                            {{-- {!! $proposal->cover_letter !!} --}}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="proposal-amnt text-end">
                                                        <h3>${{ number_format($proposal->budget, 2) }}</h3>
                                                        <p class="mb-0">Within
                                                            {{ \Carbon\Carbon::parse($proposal->delivery_date)->format('d M,Y') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                <div class="mt-3">
                                    <div class="ml-auto float-right">
                                        {{ $proposals->links() }}
                                    </div>
                                </div>






                            </div>

                        </div>

                    </div>
                </div>

                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

                    @if ($employer)
                        <div class="freelance-widget widget-author mt-2 pro-post">
                            <div class="freelance-content">
                                <a data-bs-toggle="modal" href="#rating" class="favourite"><i
                                        class="fas fa-star"></i></a>
                                <div class="author-heading">
                                    <div class="profile-img">
                                        <a href="#">
                                            <img src="{{ $employer->profile_photo ? asset($employer->profile_photo) : '/assets/img/company/img-1.png' }}"
                                                alt="author">
                                        </a>
                                    </div>
                                    <div class="profile-name">
                                        <div class="author-location">{{ $employer->name }} <i
                                                class="fas fa-check-circle text-success verified"></i></div>
                                    </div>
                                    <div class="freelance-info">
                                        <div class="freelance-location"><i
                                                class="fas fa-map-marker-alt me-1"></i>{{ $employer->address ? $employer->address->country : '' }}
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="average-rating">4.7 (32)</span>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-lg btn-primary rounded-pill"><i
                                            class="fab fa-whatsapp me-2"></i>Follow</button>
                                    <div class="follow-details">
                                        <div class="row">
                                            <div class="col-6 py-4 text-center">

                                                <!-- Heading -->
                                                <h6 class="text-uppercase text-muted">
                                                    Following
                                                </h6>

                                                <!-- Value -->
                                                <h4 class="mb-0">49</h4>

                                            </div>
                                            <div class="col-6 py-4 text-center border-start">

                                                <!-- Heading -->
                                                <h6 class="text-uppercase text-muted">
                                                    Followers
                                                </h6>

                                                <!-- Value -->
                                                <h4 class="mb-0">422</h4>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-sm text-start mb-0">
                                                    Member Since
                                                </h6>
                                            </div>
                                            <div class="col-auto">
                                                <span
                                                    class="text-sm">J{{ $employer->created_at->format('d,M Y') }}</span>
                                            </div>
                                        </div>
                                        <hr class="my-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-sm text-start mb-0">
                                                    Total Jobs
                                                </h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-sm">{{ $employer->post->count() }}</span>
                                            </div>
                                        </div>
                                        <hr class="my-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-sm text-start mb-0">
                                                    <i class="fab fa-instagram me-2"></i>Instagram
                                                </h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-sm">@johnthedon</span>
                                            </div>
                                        </div>
                                        <hr class="my-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="text-sm text-start mb-0">
                                                    <i class="fab fa-linkedin me-2"></i>LinkedIn
                                                </h6>
                                            </div>
                                            <div class="col-auto">
                                                <span class="text-sm">johnsullivan</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Link Widget -->
                    <div class="pro-post widget-box post-widget">
                        <h3 class="pro-title">Profile Link</h3>
                        <div class="pro-content pt-0">
                            <div class="form-group profile-group mb-0">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        value="https://www.DressMaker.com/developer/daren/12454687">
                                    <div class="input-group-append">
                                        <button class="btn btn-success sub-btn" type="submit"><i
                                                class="fa fa-clone"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Link Widget -->

                    <!-- Attachments Widget -->
                    <div class="pro-post widget-box post-widget pb-0">
                        <h3 class="pro-title">Attachments</h3>
                        <div class="pro-content">
                            <div class="row">
                                <div class="col-6">
                                    <div class="pro-post client-list">
                                        <p>Jobs Posted</p>
                                        <h6 class="bg-red">{{ number_format($employer->post->count()) }}</h6>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pro-post client-list">
                                        <p>Hire rate</p>
                                        <h6 class="bg-blue">{{ number_format($hire_rate) }}</h6>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- /Attachments Widget -->

                    <!-- Share Widget -->
                    <div class="pro-post widget-box post-widget">
                        <h3 class="pro-title">Share</h3>
                        <div class="pro-content">
                            <a href="#" class="share-icon"><i class="fas fa-share-alt"></i> Share</a>
                        </div>
                    </div>
                    <!-- /Share Widget -->

                </div>
                <!-- /Blog Sidebar -->

            </div>
        </div>
    </div>
    <!-- /Page Content -->


    </div>
    <!-- /Main Wrapper -->
    <!-- The Modal -->
    <div class="modal fade" id="file">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">SEND PROPOSALS</h4>
                    <span class="modal-close"><a href="#" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times-circle orange-text"></i></a></span>
                </div>
                <div class="modal-body">
                    <div class="modal-info">
                        <form action="{{ route('designer.submit_proposal', $project->id) }}" method="POST">
                            @csrf
                            <div class="feedback-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" name="budget"
                                            placeholder="Your Budget">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="date" class="form-control" name="delivery_date"
                                            placeholder="Estimated Delivery Date">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea rows="5" class="form-control" name="cover_letter" placeholder="Cover Letter"></textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="proposal-features">
									<div class="proposal-widget proposal-success">
										<label class="custom_check">
											<input type="checkbox" name="select_time"><span class="checkmark"></span>
											<span class="proposal-text">Stick this Proposal to the Top</span>
											<span class="proposal-text float-end">$12.00</span>
										</label>
										<p>The sticky proposal will always be displayed on top of all the proposals.</p>
									</div>
									<div class="proposal-widget proposal-light">
										<label class="custom_check">
											<input type="checkbox" name="select_time"><span class="checkmark"></span>
											<span class="proposal-text">$ Make Sealed Proposal</span>
											<span class="proposal-text float-end">$7.00</span>
										</label>
										<p>The sealed proposal will be sent to the project author only it will not be visible publically.</p>
									</div>
									<div class="proposal-widget proposal-danger">
										<label class="custom_check">
											<input type="checkbox" name="select_time"><span class="checkmark"></span>
											<span class="proposal-text">$ Make Sealed Proposal</span>
											<span class="proposal-text float-end">$15.00</span>
										</label>
										<p>The featured proposal will have a distinctive color and popped up between other proposals to get the author's attention.</p>
									</div>
								</div> --}}
                            <div class="row">
                                {{-- <div class="col-md-12 submit-section">
										<label class="custom_check">
											<input type="checkbox" name="select_time">
											<span class="checkmark"></span> I agree to the Terms And Conditions
										</label>
									</div> --}}
                                <div class="col-md-12 submit-section text-end">
                                    <button class="btn btn-primary submit-btn" type="submit">SUBMIT PROPOSAL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /The Modal -->
@endsection
