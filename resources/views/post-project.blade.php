<?php $page = "{{ route('employer.post-project') }}"; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center inner-banner">
                <div class="col-md-12 col-12 text-center">
                    <h2 class="breadcrumb-title">Post a Project</h2>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Post a Project</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container">
            @if (session('status'))
                    <div class="alert alert-success mt-5" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
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
    <!-- /Page Content -->


    </div>
    <!-- /Main Wrapper -->




@endsection

@section('script')

@endsection
