<?php $page = 'pagee'; ?>
@extends('layout.mainlayout')
@section('content')


    <!-- Home Banner -->
    <section class="section home-banner row-middle">
        <div class="container">

            <div class="row align-items-center">

                @if (session('status'))
                    <div class="alert alert-warning mt-5" role="alert">
                        {{ session('status') }}
                    </div>
                @endif


                <div class="col-md-8 col-lg-7">
                    <div class="banner-content">
                        <div class="rating d-flex">
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <i class="fas fa-star checked"></i>
                            <h5>Trused by over 20K+ users</h5>

                        </div>
                        <h1>Find your <br> <span class="orange-text">Dressmaker</span></h1>
                        <p>Find your <span class="orange-text">Dressmaker</span> and <span class="orange-text">Tailor</span> anywhere in the world at any time</p>

                        {{-- <form class="form" name="store" id="store" action="project">
                            <div class="form-inner">
                                <div class="input-group">
                                    <span class="drop-detail">
                                        <select class="form-control select" name="storeID">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </span>
                                    <input type="email" class="form-control" placeholder="Search here">
                                    <button class="btn btn-primary sub-btn" type="submit">Search Now</button>
                                </div>
                            </div>
                        </form> --}}

                    </div>
                </div>
                <div class="col-md-4 col-lg-5">
                    <div class="banner-img">
                        <img src="/assets/img/banner-img.png" class="img-fluid" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Home Banner -->

    <!-- Our Feature -->
    <section class="section feature">
        <div class="container">
            <div class="row">

                <!-- Feature Item -->
                <div class="col-md-4">
                    <div class="feature-item freelance-count">
                        <div class="feature-icon">
                            <img src="/assets/img/icon/icon-01.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h3>{{ $designers->count() }}</h3>
                            <p>Total Designers</p>
                        </div>
                    </div>
                </div>
                <!-- /Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="/assets/img/icon/icon-02.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h3>{{ $employers->count() }}</h3>
                            <p>Total Seller</p>
                        </div>
                    </div>
                </div>
                <!-- /Feature Item -->

                <!-- Feature Item -->
                <div class="col-md-4">
                    <div class="feature-item comp-project">
                        <div class="feature-icon">
                            <img src="/assets/img/icon/icon-03.png" class="img-fluid" alt="">
                        </div>
                        <div class="feature-content">
                            <h3>{{ $projects->count() }}</h3>
                            <p>Total projects</p>
                        </div>
                    </div>
                </div>
                <!-- /Feature Item -->

            </div>
        </div>
    </section>
    <!-- /Our Feature -->

    @if(Auth::user() && Auth::user()->role == 'buyer')
        <section class="section testimonial-section review">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-header text-center">
                            <div class="section-line"></div>
                            <h2 class="header-title">Post a Project</h2>
                        </div>
                    </div>
                </div>


                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="select-project mb-4">
                                    <form action="{{ route('employer.add-post-project') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="title-box widget-box row">

                                            <!-- Project Title -->
                                            <div class="title-content px-1 col-md-12">
                                                <div class="title-detail">
                                                    <h3>Project Name</h3>
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="title" class="form-control"  placeholder="Enter Project title">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Project Title -->

                                            <!-- Category Content -->
                                            <div class="title-content px-1 col-md-6">
                                                <div class="title-detail">
                                                    <h3>Category Type</h3>
                                                    <div class="form-group mb-0">
                                                        <select class="form-control select" name="category_id">
                                                            <option value="">Select One</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Category Content -->

                                            <div class="title-content col-md-6">
                                                <div class="title-detail">
                                                    <h3>Job Type</h3>
                                                    <div class="form-group mb-0">
                                                        <select class="form-control select" name="job_type">
                                                            <option value="">Select One</option>
                                                            <option value="Remote">Remote</option>
                                                            <option value="Offline">Offline</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- Price Content -->
                                            <div class="title-content px-1 col-md-6">
                                                <div class="title-detail">

                                                    <div class="form-group price-cont mb-0" id="price_type2">
                                                        <h3>Pricing Type</h3>
                                                        <select name="pricing_type" class="form-control select">
                                                            <option value="">Select One</option>
                                                            @foreach ($pricing_types as $type)
                                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                </div>
                                            </div>
                                            <!-- /Price Content -->

                                            <div class="title-content px-1 col-md-6">
                                                <div class="title-detail">


                                                    <div class="form-group" id="price_id2" style="">
                                                        <h3>Price</h3>
                                                        <div class="input-group">
                                                            <input type="text" name="price" class="form-control" placeholder="20.00">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>



                                            <!-- Project Period Content -->
                                            <div class="title-content px-1">
                                                <div class="title-detail">
                                                    <h3>Period of Project</h3>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            From:
                                                            <input type="date" class="form-control" name="start_date"
                                                                        placeholder="Select Date">
                                                        </div>
                                                        <div class="col-md-4">
                                                            To:
                                                            <input type="date" class="form-control" name="end_date"
                                                                        placeholder="Select Date">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Project Period Content -->

                                            <!-- /Add Document -->
                                            <div class="title-content px-1">
                                                <div class="title-detail">
                                                    <h3>Add Documents</h3>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="document">
                                                        <label class="custom-file-label"></label>
                                                    </div>
                                                    <p class="mb-0">Size of the Document should be Below 2MB</p>
                                                </div>
                                            </div>
                                            <!-- /Add Document -->

                                            <!-- Add Links -->
                                            {{-- <div class="title-content px-1">
                                                <div class="title-detail">
                                                    <h3>Add Links</h3>
                                                    <div class="links-info">
                                                        <div class="row form-row links-cont">
                                                            <div class="col-12 col-md-11">
                                                                <div class="form-group mb-0">
                                                                    <input type="text" class="form-control" name="links">
                                                                    <p class="mb-0">Add Reference links if any</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-1">
                                                                <a href="javascript:void(0);" class="btn add-links"><i
                                                                        class="fas fa-plus"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- /Add Links -->

                                            <!-- Project Title -->
                                            <div class="title-content px-1 pb-0">
                                                <div class="title-detail">
                                                    <h3>Write Description of Projects </h3>
                                                    <div class="form-group mb-0">
                                                        <textarea class="form-control summernote" rows="5" name="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Project Title -->

                                            <h3 class="text-center my-3">Designer Requirements:</h3>
                                            <hr>

                                            <!-- Skills Content -->
                                            <div class="title-content px-">
                                                <div class="title-detail">
                                                    <h3>Desired areas of expertise </h3>
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="area" data-role="tagsinput" class="input-tags form-control"
                                                            name="services" value="" id="services"
                                                            placeholder="">
                                                        <p class="text-muted mb-0">Enter skills for needed for project</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Skills Content -->

                                            <div class="title-content px-1 col-md-6">
                                                <div class="title-detail">
                                                    <h3>Qualifications</h3>
                                                    <div class="form-group mb-0">
                                                        <input type="text" name="qualification" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="title-content px-1 col-md-6">
                                                <div class="title-detail">
                                                    <h3>Experience (Years)</h3>
                                                    <div class="form-group mb-0">
                                                        <input type="number" name="experience" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 text-end">
                                                    <div class="btn-item">
                                                        <button type="submit" class="btn next-btn">Submit</button>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <!-- Project Title -->

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



            </div>
        </section>
    @endif

    <!-- Top Instructor -->
    <section class="section developer">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12 mx-auto">
                    <div class="section-header text-center">
                        <div class="section-line"></div>
                        <h2 class="header-title">Find Designers In</h2>
                        <p>Work with talented people all over the world</p>
                    </div>
                </div>
            </div>

            <div id="developers-slider2" class="owl-carousel owl-theme developers-slider">
                @foreach ($countries as $key =>$country)
                <div class="freelance-widget">
                    <div class="freelance-content">

                        <div class="freelance-img">
                            <a href="#">
                                <img src="{{ $country->image ? asset($country->image) : asset('assets/img/img-04.jpg') }}" alt="Profile Photo">
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">{{ $country->name }}</a></h3>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>



        </div>
    </section>
    <!-- End Developer -->





    <!--- Developed Project  -->
    <section class="section work">
        <div class="container-fluid">
            <div class="row">

                <!-- Feature Item -->
                <div class="col-md-6 work-box bg1">
                    <div class="work-content">
                        <h2>Start Your Freelancer Designer Journey Now!</h2>
                        <p>Signup Here</p>
                        <a href="{{ url('/register?user=1') }}"><i class="fas fa-long-arrow-alt-right long-arrow"></i></a>
                    </div>
                </div>
                <!-- /Feature Item -->

                <div class="col-md-6 work-box bg2">
                    <div class="work-content">
                        <h2>Signup as a Seller for Free!</h2>
                        <p>- Open your own Online Shop.</p>
                        <p>- Sell Services or Ready-made Goods.</p>
                        <p>- Get Paid</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- /Developed Project  -->

    <!-- Projects -->
    <!--<section class="section projects">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12 col-md-12 mx-auto">-->
    <!--                <div class="section-header text-center">-->
    <!--                    <div class="section-line"></div>-->
    <!--                    <h2 class="header-title">Get Inspired<br> By Design Projects</h2>-->
    <!--                    <p>High Performing Solutions To Your</p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <!--        <div class="row">-->

                <!--- Project Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-01.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>ANDROID APPS</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-02.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>LARAVEL</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project-Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-03.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>React</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-04.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>GOLANG</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-01.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>.NET</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-04.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>JAVA</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-03.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>PYTHON</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

                <!--- Project-Item  -->
    <!--            <div class="col-lg-3 col-md-6 col-sm-6">-->
    <!--                <div class="project-item">-->
    <!--                    <div class="project-img">-->
    <!--                        <a href="project"><img src="/assets/img/project/project-01.jpg" alt=""-->
    <!--                                class="img-fluid"></a>-->
    <!--                    </div>-->
    <!--                    <div class="d-flex justify-content-between align-items-center">-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>45</h4>-->
    <!--                            <h5>ANGULAR</h5>-->
    <!--                        </div>-->
    <!--                        <div class="pro-icon">-->
    <!--                            <div class="project-icon">-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                        <div class="project-content">-->
    <!--                            <h4>20</h4>-->
    <!--                            <h5>Designers</h5>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
                <!--- /Project Item  -->

    <!--        </div>-->

    <!--        <div class="row">-->
    <!--            <div class="col-md-12 text-center">-->
    <!--                <div class="see-all">-->
    <!--                    <a href="project" class="btn all-btn">SEE ALL PROJECT</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- /Projects -->

    <!-- Subscribe -->
    {{-- <section class="section subscribe">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="/assets/img/subscribe.png" class="img-fluid" alt="subscribe">
                </div>
                <div class="col-md-6">
                    <h3>Subscribe To Get Discounts, Updates & More</h3>
                    <p>Monthly product updates, industry news and more!</p>
                    <form action="#">
                        <div class="form-inner">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Enter Email Address">
                                <button class="btn btn-primary sub-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Subscribe -->

    <!-- Top Instructor -->
    <section class="section developer">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-12 mx-auto">
                    <div class="section-header text-center">
                        <div class="section-line"></div>
                        <h2 class="header-title">Most Hired Designers</h2>
                        <p>Get Specialist at the most affordable price</p>
                    </div>
                </div>
            </div>

            <div id="developers-slider" class="owl-carousel owl-theme developers-slider">
                @foreach ($designers as $key =>$designer)
                <div class="freelance-widget">
                    <div class="freelance-content">
                        @if(Auth::user() && Auth::user()->role == 'buyer')
                            <a href="{{ route('employer.set_fav',$designer->id) }}" class="favourite"><i class="fas fa-star"></i></a>
                        @endif

                        <div class="freelance-img">
                            <a href="#">
                                <img src="{{ $designer->profile_photo ? asset($designer->profile_photo) : asset('assets/img/img-04.jpg') }}" alt="Profile Photo">
                                @if($designer->verify == 1)
                                    <span class="verified"><i class="fas fa-check-circle"></i></span>
                                @endif
                            </a>
                        </div>
                        <div class="freelance-info">
                            <h3><a href="#">{{ $designer->name }}</a></h3>
                            <div class="freelance-specific">Fashion Designer</div>
                            <div class="freelance-location"><i class="fas fa-map-marker-alt me-1"></i>{{ $designer->address ? $designer->address->state .','. $designer->address->country : '' }}</div>
                            <div class="rating">

                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7 (32)</span>
                            </div>
                            {{-- <div class="freelance-tags">
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Web
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">UI
                                        Design</span></a>
                                <a href="javascript:void(0);"><span class="badge badge-pill badge-design">Node
                                        Js</span></a>
                            </div> --}}
                            <div class="freelancers-price">${{ $designer->hourly_rate }} Hourly</div>
                        </div>
                    </div>
                    <div class="cart-hover">
                        <a href="{{ url('designer-details/'.$designer->name) }}" class="btn-cart" tabindex="-1">View Profile</a>
                    </div>
                </div>


                @endforeach
            </div>



        </div>
    </section>
    <!-- End Developer -->



    <!-- Review -->
    <section class="section testimonial-section review">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <div class="section-line"></div>
                        <h2 class="header-title">Top Reviews</h2>
                        <p>High Performing Designers To Your</p>
                    </div>
                </div>
            </div>
            <div id="testimonial-slider" class="owl-carousel owl-theme testimonial-slider">

                <!-- Review Widget -->
                <div class="review-blog">
                    <div class="review-top d-flex align-items-center">
                        <div class="review-img">
                            <a href="review"><img class="img-fluid" src="/assets/img/review/review-01.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="review-info">
                            <h3>Davis Payerf</h3>
                            <h5>CEO</h5>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.7</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <!-- / Review Widget -->

                <!-- Review Widget -->
                <div class="review-blog">
                    <div class="review-top d-flex align-items-center">
                        <div class="review-img">
                            <a href="review"><img class="img-fluid" src="/assets/img/review/review-02.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="review-info">
                            <h3>Davis Payerf</h3>
                            <h5>PROJECT LEAD</h5>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">4.8</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <!-- /Review Widget -->

                <!-- Review Widget -->
                <div class="review-blog">
                    <div class="review-top d-flex align-items-center">
                        <div class="review-img">
                            <a href="review"><img class="img-fluid" src="/assets/img/review/review-03.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="review-info">
                            <h3>Davis Payerf</h3>
                            <h5>TEAM LEAD</h5>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">5.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <!-- /Review Widget -->

                <!-- Review Widget -->
                <div class="review-blog">
                    <div class="review-top d-flex align-items-center">
                        <div class="review-img">
                            <a href="review"><img class="img-fluid" src="/assets/img/review/review-02.jpg"
                                    alt="Post Image"></a>
                        </div>
                        <div class="review-info">
                            <h3>Davis Payerf</h3>
                            <h5>PROJECT LEAD</h5>
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star"></i>
                                <span class="average-rating">3.2</span>
                            </div>
                        </div>
                    </div>
                    <div class="review-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Volutpat orci enim, mattis nibh aliquam
                            dui, nibh faucibus aenean.</p>
                    </div>
                </div>
                <!-- /Review Widget -->
            </div>

        </div>
    </section>
    <!-- / Review -->













    <!-- News -->
    {{-- <section class="section news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center">
                        <div class="section-line"></div>
                        <h2 class="header-title">Feature Blog</h2>
                        <p>High Performing Designers To Your</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="row blog-grid-row">
                    <div class="col-md-4">

                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog-details"><img class="img-fluid" src="/assets/img/blog/blog-01.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="developer-details"><img src="/assets/img/img-02.jpg" alt="Post Author">
                                                <span> David Lee</span></a>
                                        </div>
                                    </li>
                                    <li><i class="far fa-clock"></i> 4 Oct 2021</li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details">Your next job starts right here</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- /Blog Post -->

                    </div>
                    <div class="col-md-4">

                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog-details"><img class="img-fluid" src="/assets/img/blog/blog-02.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="developer-details"><img src="/assets/img/img-03.jpg" alt="Post Author">
                                                <span> Deborah Angel</span></a>
                                        </div>
                                    </li>
                                    <li><i class="far fa-clock"></i> 10 Oct 2021</li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details">People who completed NAND?</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- /Blog Post -->

                    </div>
                    <div class="col-md-4">

                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog-details"><img class="img-fluid" src="/assets/img/blog/blog-03.jpg"
                                        alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                <ul class="entry-meta meta-item">
                                    <li>
                                        <div class="post-author">
                                            <a href="developer-details"><img src="/assets/img/img-04.jpg" alt="Post Author">
                                                <span>Darren Elder</span></a>
                                        </div>
                                    </li>
                                    <li><i class="far fa-clock"></i> 3 Nov 2021</li>
                                </ul>
                                <h3 class="blog-title"><a href="blog-details">DressMaker - How to get job through
                                        online?</a></h3>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed
                                    do eiusmod tempor.</p>
                            </div>
                        </div>
                        <!-- /Blog Post -->

                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- / News -->


    </div>
    <!-- /Main Wrapper -->
@endsection
