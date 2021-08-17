@extends('layout.layout')


@section('content')
<style>
    .project-card {
        width: 100%;
        height:270px;
    
    }
    .project-hover {
        opacity: 1;
        background-color: rgb(63 63 63 / 90%);
        padding: 10% 30px !important;
    }
</style>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img compag" style="background-image: url(images/hero-image-text-right-darker.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>For Mid level and Senior level Pharma Professionals</h2>
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
            <div class="row" id="">
                <!-- Sidebar -->
                <div class="col-md-3 col-xs-12" style="border-right: 1px solid #e8e8e8;">
                    <nav id="sidebar">
                        <div class="vertical-tabs">
                            <ul class="nav nav-tabs list-unstyled components mb-5" role="tablist">
                                <li class="">
                                    <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Connect with Amy India</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#pag2" role="tab" aria-controls="home2">Extended Programmes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Vacancies</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="settings">Upload Your CV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="settings">Process</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- /#sidebar-wrapper -->
                <div class="col-md-9 col-xs-12">
                    <!-- Page Content -->
                    <div id="page-content-wrapper">
                        <div class="tab-content">
                            <div class="tab-pane active" id="pag1" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <div class="Connecting">
                                        <h2 class="">Connecting with Amy India</h2>
                                        <p>Thank you for trusting Amy India to be a part of your Career Growth Plan. Career planning is the continuous process and so we will always be a part of your Career Growth journey by helping you to give best job opportunities.</p>
                                        <p>We assist successful Pharma Professionals like you in following Leadership role in Indian MNC / MNC Pharma companies and FMCG industry</p>
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-5 m-3 col-md-5 col-sm-12 project-card wow animated animated4 fadeInLeft">
                                                <div class="project-hover">
                                                    <h2>Senior Management Professional – Sales & Marketing</h2>
                                                    <hr />
                                                    <p>Director / Vice President / General Manager etc...</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 m-3 col-md-5 col-sm-12 project-card wow animated animated3 fadeInLeft"> 
                                                <div class="project-hover">
                                                    <h2> Product Management Professionals</h2>
                                                    <hr />
                                                    <p>Marketing Manager / Group Product Manager / Product Manager / Product Executives</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-xl-5 col-lg-5 m-3 col-md-5 col-sm-12 project-card wow animated animated4 fadeInLeft">
                                                <div class="project-hover">
                                                    <h2>Field Sales Processionals – All India</h2>
                                                    <hr />
                                                    <p>Area – Regional – Divisional – Zonal – National Sales Managers etc....</p>
                                                </div>
                                            </div>
                                            <div class="col-xl-5 col-lg-5 m-3 col-md-5 col-sm-12 .project-card wow animated animated4 fadeInLeft">
                                                <div class="project-hover">
                                                    <h2>Marketing & Sales Management Support</h2>
                                                    <hr />
                                                    <p>Medical Advisor / Training / Marketing Research / Secretaries / Accounts / Distribution / Human Resource / Administration – Sales & General etc...</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pag2" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h2 class="pb-4">Extended Programmes That You May Join</h2>
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="more-less fa fa-plus-circle" aria-hidden="true"></i>
                                                        CAREER growth discussions FOR SENIOR LEVEL PROFESSIONALS
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    Candidates can come and meet us at a preferred time and discuss their careers where we provide them with assistance in understanding their aspirations and accordingly advising them on what needs to be done. This could be over the phone or a face to face meet.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <i class=" more-less fa fa-plus-circle" aria-hidden="true"></i>
                                                        CAREER Growth MEET FOR SENIOR LEVEL PROFESSIONALS (60 Minutes Programme)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    If you are CEO/ Director/Vice President/ SBU Head/ National Sales Head – A career meet will be organized in AMY INDIA OFFICE (Maintaining high level of confidentiality) on Friday / Saturday / Sunday.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <i class=" more-less fa fa-plus-circle" aria-hidden="true"></i>
                                                        CAREER GROWTH SEMINARS (1 day programme)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    Career Growth Seminars are organized by AMY INDIA time to time to update Mid / Senior Level Pharma Professionals for current Growth Opportunities in  Pharma Industry.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        <i class=" more-less fa fa-plus-circle" aria-hidden="true"></i>
                                                        CAREER GROWTH SEMINARS (1 day programme)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    Though people say that leaders are born, it is quite thrilling and interesting to know that all of these skills can be developed through our effective professional Leadership development programs.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        <i class="more-less fa fa-plus-circle" aria-hidden="true"></i>
                                                        Benefits of attending our leadership development programs are
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                <div class="panel-body">
                                                    We have Certified experts. <br/>We offer Free WISDOM books that are highly appreciated and distributed among the successful leaders.
                                                    <br/> <br/>
                                                    <strong>(As per Amy s Code of Practice, We maintain High level of Confidentiality, while delivering and fulfilling your Career Growth need)</strong>
                                                </div>
                                            </div>
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
                                        <tr>
                                            <td>Asst Manager HR</td>
                                            <td>MBA / PGDM in HR with more than 5 Years experience in HR Consultancy with successful Track Record</td>
                                            <td align="center">1</td>
                                        </tr>
                                        <tr>
                                            <td>Sr. Executive HR</td>
                                            <td>MBA / PGDM in HR with more than 3 years experience in HR Consultancy with successful Track Record.</td>
                                            <td align="center">1</td>
                                        </tr>
                                        <tr>
                                            <td>Executive-  Customer Care</td>
                                            <td>MBA / PGD in Marketing with 2 years experience in Sales / Marketing / Customer Care in Service Industry.</td>
                                            <td align="center">1</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="pag4" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h2 class="pb-4">Upload Your CV:</h2>
                                    <form id="form" action="{{route('savecv')}}" method="post" enctype="multipart/form-data">
                                        <div class="inner-page-wrapper apply-jobs-wrapper">
                                            <div class="row">
                                                <div class="col-12 col-sm-6 col-lg-6">
                                                    <input class="form-control" name="name" id="name" placeholder="Eg. Abhishek" required="" type="text">
                                                    <input class="form-control" id="phone" name="phone" placeholder="Eg. 9876543210" required="" type="text">
                                                    <input class="form-control" id="email" name="email" placeholder="Eg. abc@xyz.def" required="" type="email">
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-6">
                                                    <textarea class="form-control" id="comment" placeholder="Eg. Comment here..." required=""></textarea>
                                                    <span class="btn btn-file"> Browse Your Resume
                                                        <input type="file" name="resume" id="resume">
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
                                    <h2 class="pb-4">When You Enroll With Us As A Candidate</h2>
                                    <p>Amy India believes that Career Growth is a journey and not a destination, we assure to enhance your career with our enriched expertise, support and guidance that we have achieved by years of research and experience. We shall help you in your Career Growth for you can enroll here (please note that we currently serve only mid and senior level pharma professionals looking for a career growth opportunity)</p>
                                    <p>What happens after you have enrolled?</p>
                                    <p>Once you have uploaded your resume on our website and filled in the required information (personal & professional), we record all your data with us in our database. We then study your profile thoroughly, to understand what suits you better. The process is then followed by</p>
                                    <p></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="pag6" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h3>TAB 6</h3>
                                    <p>CONTEUDO 6</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="pag7" role="tabpanel">
                                <div class="sv-tab-panel">
                                    <h3>TAB 7</h3>
                                    <p>CONTEUDO 7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /#page-content-wrapper -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- jquery-validation -->
    <script src="{{asset('plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-validation/additional-methods.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            $('#form').validate({
                rules: {
                    name: {
                        required: true
                    },
                    phone: {
                        required: true,
                    },
                    resume: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    name: {
                        required: "The name field is required."
                    },
                    phone: {
                        required: "The phone field is required.",
                    },
                    resume: {
                        required: "The resume field is required."
                    },
                    email: {
                        required: "The email field is required"
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