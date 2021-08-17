@extends('admin.layout.layout')

@push('styles')
    <style>
        .error{
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }

        @if(isset($job))
            input, textarea{
                border: 1px solid #e9f0f7 !important;
                background-color: #e9f0f7 !important;
            }
            input{
                pointer-events: none !important;
            }
        @endif
    </style>
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jobs</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin-jobs')}}">Jobs</a> </li>
                        @if(isset($job))
                            <li class="breadcrumb-item active">Edit Job</li>
                        @else
                            <li class="breadcrumb-item active">Post New Job</li>
                        @endif
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content-message">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('failure'))
                        <div class="alert alert-error">
                            {{ session('failure') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" id="jobForm" method="post" action="@if(isset($job)){{route('admin-update-job',['id'=>$job->getId()])}}@else{{route('admin-save-job')}}@endif">
                        {{ csrf_field() }}
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Basic Job Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTitle">Job Title <span>*</span></label>
                                            <input type="text" name="jobTitle" class="form-control" id="jobTitle" placeholder="E.g Back Office Job" value="@if($errors->any()){{old('jobTitle')}}@elseif(isset($job)){{$job->getJobTitle()}}@else{{''}}@endif">
                                            <span id="jobTitle-error" class="error">
                                                @if ($errors->has('jobTitle')){{$errors->first('jobTitle')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="noOfOpenings">No of Openings</label>
                                            <input type="number" name="noOfOpenings" class="form-control" id="noOfOpenings" placeholder="Eg. 2" value="@if($errors->any()){{old('noOfOpenings')}}@elseif(isset($job)){{$job->getNoOfOpenings()}}@else{{''}}@endif">
                                            <span id="noOfOpenings-error" class="error">
                                                @if ($errors->has('noOfOpenings')){{$errors->first('noOfOpenings')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobLocation">Job Location <span>*</span></label>
                                            <input type="text" name="jobLocation" class="form-control" id="jobLocation" placeholder="Eg. Mumbai" value="@if($errors->any()){{old('jobLocation')}}@elseif(isset($job)){{$job->getJobLocation()}}@else{{''}}@endif">
                                            <span id="jobLocation-error" class="error">
                                                @if ($errors->has('jobLocation')){{$errors->first('jobLocation')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Additional Job Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobInfo">Job Info/Job Description <span>*</span></label>
                                            <textarea name="jobInfo" class="form-control">@if($errors->any()){{old('jobInfo')}}@elseif(isset($job)){{$job->getJobDescription()}}@else{{''}}@endif</textarea>
                                            <span id="jobInfo-error" class="error">
                                                @if ($errors->has('jobInfo')){{$errors->first('jobInfo')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jobTimings">Job Timings</label>
                                            <textarea name="jobTimings" class="form-control" placeholder="Eg. 9:30 am - 6:30pm | Monday to Saturday" >@if($errors->any()){{old('jobTimings')}}@elseif(isset($job)){{$job->getJobTiming()}}@else{{''}}@endif</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="interviewDetails">Interview Details</label>
                                            <textarea name="interviewDetails" class="form-control" placeholder="Eg. 11:00 am - 4:00pm | Monday to Saturday">@if($errors->any()){{old('interviewDetails')}}@elseif(isset($job)){{$job->getInterviewDetails()}}@else{{''}}@endif</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">About the Company </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="companyName">Company Name <span>*</span></label>
                                            <input type="text" name="companyName" class="form-control" id="companyName" placeholder="Eg. Amy HRMS" value="@if($errors->any()){{old('companyName')}}@elseif(isset($job)){{$job->getCompany()->getName()}}@else{{''}}@endif">
                                            <span id="companyName-error" class="error">
                                                @if ($errors->has('companyName')){{$errors->first('companyName')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contactPerson">Contact Person Name <span>*</span></label>
                                            <input type="text" name="contactPerson" class="form-control" id="contactPerson" placeholder="Eg. Abhishek" value="@if($errors->any()){{old('contactPerson')}}@elseif(isset($job)){{$job->getCompany()->getContactPersonName()}}@else{{''}}@endif">
                                            <span id="contactPerson-error" class="error">
                                                @if ($errors->has('contactPerson')){{$errors->first('contactPerson')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber">Phone Number</label>
                                            <input type="text" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Eg. 9876543210" value="@if($errors->any()){{old('phoneNumber')}}@elseif(isset($job)){{$job->getCompany()->getPhoneNumber()}}@else{{''}}@endif">
                                            <span id="phoneNumber-error" class="error">
                                                @if ($errors->has('phoneNumber')){{$errors->first('phoneNumber')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="emailId">Email Id <span>*</span></label>
                                            <input type="text" name="emailId" class="form-control" id="emailId" placeholder="Eg. test@gmail.com" value="@if($errors->any()){{old('emailId')}}@elseif(isset($job)){{$job->getCompany()->getEmail()}}@else{{''}}@endif">
                                            <span id="emailId-error" class="error">
                                                @if ($errors->has('emailId')){{$errors->first('emailId')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="companyAddress">Company Address <span>*</span></label>
                                            <textarea name="companyAddress" class="form-control">@if($errors->any()){{old('companyAddress')}}@elseif(isset($job)){{$job->getCompany()->getAddress()}}@else{{''}}@endif</textarea>
                                            <span id="companyAddress-error" class="error">
                                                @if ($errors->has('companyAddress')){{$errors->first('companyAddress')}}@endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(!$viewFlag)
                            <button type="submit" class="btn btn-primary">Submit</button>
                        @endif
                    </form>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('scripts')
    <!-- jquery-validation -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('#jobForm').validate({
                rules: {
                    jobTitle: {
                        required: true
                    },
                    jobLocation: {
                        required: true,
                    },
                    jobInfo: {
                        required: true
                    },
                    companyName: {
                        required: true
                    },
                    contactPerson: {
                        required: true
                    },
                    emailId: {
                        required: true,
                        email: true
                    },
                    companyAddress: {
                        required: true
                    }
                },
                messages: {
                    jobTitle: {
                        required: "The job title field is required."
                    },
                    jobLocation: {
                        required: "The job location field is required.",
                    },
                    jobInfo: {
                        required: "The job info field is required."
                    },
                    companyName: {
                        required: "The company name field is required"
                    },
                    contactPerson: {
                        required: "The contact person field is required"
                    },
                    emailId: {
                        required: "The email id field is required",
                        email: "The email id must be a valid email address"
                    },
                    companyAddress: {
                        required: "The company address field is required."
                    }
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endpush