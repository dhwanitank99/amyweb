@extends('layout.layout')
@push('styles')
    <style>
        .error {
            color: red;
            font-size: 0.8em;
        }
        .project-card {
            width: 100%;
            height:270px;
    
        }
        .project-hover {
            opacity: 1;
            background-color: rgb(63 63 63 / 90%);
            padding: 6% 30px !important;
            border-radius:10px;
        }
        .project-hover hr {
            height: 30px;
            width: 0;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            transition: all 0.5s ease;
            background-color: rgba(255, 255, 255, 1);
            border: 0;
        }
        .project-hover a {
            color: rgba(255, 255, 255, 1);
            padding: 2px 22px;
            line-height: 40px;
            border: 2px solid rgba(255, 255, 255, 1);
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }
        
        .project-hover a:hover {
            border-color: rgba(51, 51, 51, 1);
            color: rgba(51, 51, 51, 1);
            background-color: #FFF;
        }
        
        .project-card:hover .project-hover {
            opacity: 1;
        }
        
        .project-card:hover .project-hover hr {
            width: 100%;
            height: 5px;
        }
    </style>
@endpush
@section('content')
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img compag" style="background-image: url({{Storage::url($candidateConnectHero->getFeaturedImage())}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        {!! $candidateConnectHero->getContent() !!}
                        <!-- Breadcumb -->
                        <nav>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Candidate</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area com-section">
        <div class="container">
            <div class="row">
                <!--================ Sidebar Menu ========================== -->
                <div class="col-md-3 col-xs-12">
                    <nav id="sidebar" class="marketingpage-block" style="height:100%;">
                        <div class="vertical-tabs">
                            <ul class="nav nav-tabs list-unstyled components mb-5" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="why amy india">Why Amy India</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag2" role="tab" aria-controls="connect with amy">Connect with Amy India</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="vacancies">Vacancies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="upload cv">Upload Your CV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="process">Process</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- ================== Sidebar Menu End ======================== -->

                <!-- ================== Content of Menu Start ========================= -->
                <div class="col-md-9 col-xs-12">
                    <div id="page-content-wrapper">
                        <div class="tab-content">
                            <div class="tab-pane active" id="pag1" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <div class="row">
                                        <div class="col-12 col-lg-12">
                                            <h2 class="pb-4">{{$whyAmyIndia->getTitle()}}</h2>
                                            <p class="pb-4"><img src="images/why amyindia.jfif" class="img-responsive"></p>
                                            {!! $whyAmyIndia->getContent() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="pag2" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <div class="Connecting">
                                        <h2 class="">{{$connectAmy->getTitle()}}</h2>
                                        {!! $connectAmy->getContent() !!}
                                        <div class="row">
                                            @if(count($hiringCategories)>0)
                                                @foreach($hiringCategories as $hiringCategory)
                                                    <div class="col-xl-5 col-lg-5 m-3 col-md-5 col-sm-12 project-card wow animated animated4 fadeInLeft">
                                                        <div class="project-hover">
                                                            <h2>{{$hiringCategory->getTitle()}}</h2>
                                                            <hr />
                                                            {!! $hiringCategory->getContent() !!}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="pag3" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h2 class="pb-4">We have following vacancies:</h2>
                                    <table id="customers">
                                        <tr>
                                            <th>Position</th>
                                            <th>Qualification & Experience</th>
                                            <th>No. Of Positions</th>
                                        </tr>
                                        @if(count($jobs)>0)
                                            @foreach($jobs as $job)
                                                <tr>
                                                    <td>{{$job->getJobTitle()}}</td>
                                                    <td>{{ $job->getJobDescription() }}</td>
                                                    <td align="center">{{$job->getNoOfOpenings()}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="pag4" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h2 class="pb-4">Upload Your CV</h2>
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
                                    <form action="{{route('candidate-connect-application')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="inner-page-wrapper apply-jobs-wrapper">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-lg-6">
                                                    <input class="form-control" id="name" name="name" placeholder="Your Name" required="" type="text">
                                                    <span id="title-error" class="error">
                                                        @if ($errors->has('name')){{$errors->first('name')}}@endif
                                                    </span>
                                                    <input class="form-control" id="contact-number" name="contact-number" placeholder="Your Phone number" required="" type="text">
                                                    <span id="title-error" class="error">
                                                        @if ($errors->has('contact-number')){{$errors->first('contact-number')}}@endif
                                                    </span>
                                                    <input class="form-control" id="email" name="email" placeholder="Enter Your E-Mail" required="" type="email">
                                                    <span id="title-error" class="error">
                                                        @if ($errors->has('email')){{$errors->first('email')}}@endif
                                                    </span>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-6">
                                                    <textarea class="form-control" name="comment" id="comment" placeholder="Comment here..." required=""></textarea>
                                                    <span class="btn btn-file"> Browse Your Resume
                                                      <input type="file" name="file">
                                                      </span>
                                                    <span id="title-error" class="error">
                                                        @if ($errors->has('file')){{$errors->first('file')}}@endif
                                                    </span>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn fancy-btn fancy-dark bg-transparent">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane" id="pag5" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h2 class="pb-4">{{$process->getTitle()}}</h2>
                                    {!! $process->getContent() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ================== Content of Menu End ========================= -->
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script type="text/javascript">
        var url = document.location.toString();
        if (url.match('#')) {
            $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
        }

        // Change hash for page-reload
        $('.nav-tabs a').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
        })
    </script>
@endpush