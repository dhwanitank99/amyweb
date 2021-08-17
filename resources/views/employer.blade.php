@extends('layout.layout')
<style>
    /*example*/

.firstsite{
    width: 110%;
    margin: auto;
    overflow: hidden;
    background: white;
    margin-top: 20px;
  
}

.firstsite ul{
    padding: 14px;
    margin-top: 8px;
}


.firstsite ul li{
    float:left;
    list-style: none;
    width:45%;
    height:700px;
    background-color: darkblue;
    margin :20px 0px 20px 3px; 
    border:px solid ;
    box-sizing: border-box;
}
.firstsite ul li:hover{
    opacity: 0.8;
}

.firstsite ul li .bottom{
    width: 100%;
    height:90px;
    line-height: 25px;
    background: orange;    
    text-align: left;
    color:white;
    font-size: 20px;
    padding: 13px;
    
   
}

@media screen and (max-width:1250px){
    .firstsite ul li{
        width:40%;
        margin-left: 40px;
         
    }
    .firstsite ul p{
        padding: 6px;
    }
    .secondsite{
        padding: 6px;
    }
    /*example done*/
</style>

@section('content')

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img compag" style="background-image: url({{Storage::url($employerHero->getFeaturedImage())}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        {!! $employerHero->getContent() !!}
                        <!-- Breadcumb -->
                        <nav>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Employers</li>
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
                <!-- Sidebar -->
                <div class="col-md-3 col-xs-12">
                    <nav id="sidebar" class="marketingpage-block" style="height:100%;">
                        <div class="vertical-tabs">

                            <ul class="nav nav-tabs list-unstyled components mb-5" role="tablist">
                                <li class="">
                                    <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">Why Amy India</a>
                                </li>
                                <li class="nav-item">
                                    <a data-toggle="tab" href="#pag2" role="tab" aria-controls="home2">Value Added service to our clients</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#pag3" role="tab" aria-controls="messages">Value Added Service to our Candidates</a>
                                </li>
                            </ul>


                        </div>
                    </nav>

                </div>
                <!-- /#sidebar-wrapper -->

                <div class="col-md-9 col-xs-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="pag1" role="tabpanel">
                            <div class="sv-tab-panel">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <h2 class="pb-4">{{$whyAmyIndia->getTitle()}}</h2>
                                        <p class="pb-4"><img src="images/why.png" class="img-responsive"></p>
                                        {!! $whyAmyIndia->getContent() !!}
                                       <!--  <div class="firstsite">

                                                <ul>
                                                <li> <div class="bottom">Ensuring Mutual Growth and Selfless Effort to Nourish the Pharmaceutical Industry </div>
                                                    <p style="color:white;" >We are engaged in a research and not a business, that promises mutual growth and a selfless effort to nourish the Pharmaceutical Industry with the absolute input of professional skills and talents to take the industry to the peek. At Amy, we put efforts to understand a company's requirement, it's need of the block that shall fill the gap and bridge the company's path towards a promising target. We personalize and customize the solutions. We do, something that's not termed 'simple'. It's an expertise of over a decade and an extreme endeavour that brings us achievements at every duration and makes us the one and only, where ever we get associated.</p>
                                                </li>
                    <li> <div class="bottom">We collect gems..We polish them..We present them..and they excel by their own..Join us now and surf accross</div>
                      <p style="color:white;">We collect gems.. We polish them.. We present them... and then they excel by their own... Join us now and surf across the Gems in the industry.

        As our side stream attempt we urge to add to the contribution of our society by helping the individuals to come up strong in their career with a positive attitude. As per the international surveys conducted by various Training and Development Organizations it has been found that our professional and personal growth depends on Positive Energy within us. As we all know that we possess certain forms of energy within us and that energy can neither be created nor be destroyed, but just changes its form. We hence thrive with the constant endeavor in training the individuals to make best use of Positive Energy within us and also change our existing negative forms of energies into positive ones. Our career meet segment complies of </br>

        <b>1. Career Counselling – personal & professional growth
            2.Growing within the company & within the industry – separate sessions</b></p>
                  </li>
                    
                    
                </ul>
            </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="pag2" role="tabpanel">
                            <div class="sv-tab-panel">
                                <h2 class="pb-4">{{$vasClient->getTitle()}}</h2>
                                {!! $vasClient->getContent() !!}
                            </div>
                        </div>


                        <div class="tab-pane" id="pag3" role="tabpanel">

                            <div class="sv-tab-panel ">
                                <h2 class="pb-4">{{$vasCandidate->getTitle()}}</h2>

                                {!! $vasCandidate->getContent() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->
    <section class="elementor-background-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="job_download_text">
                        <h2>Download App For Andriod Now!</h2>
                        <p>Mobile application design isn't always easy.</p>
                        <div class="job_download_fig">
                            <a href="#"> <img src="https://jobly.kodeforest.com/wp-content/uploads/2019/05/play-store.png" alt=""> </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="job_app_fig float-bob">
                        <img src="images/fig-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection