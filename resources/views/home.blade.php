@extends('layout.layout')

@push('styles')
    <link href="{{asset('css/counter.css')}}"  rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/css.css">
  <!-- <link rel="icon" type="image/x-icon" href="images/favicon.png"> -->

    <style>
 

        .galleryContainer .moveRightCurrentSlide{
            animation-name: moveRightCurrent;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-fill-mode:forwards;
        }
        .galleryContainer .moveRightPrevSlide{
            animation-name: moveRightPrev;
            animation-duration: 0.5s;
            animation-timing-function: linear;
            animation-fill-mode:forwards;
        }
        .captionText{
            font-size: 20px;
        }
        @keyframes moveRightCurrent {
            from {margin-left: 0;opacity: 1;}
            to {margin-left: 100%;opacity: 1;}
        }
        @keyframes moveRightPrev {
            from {margin-left: -100%;opacity: 1;}
            to {margin-left: 0%;opacity: 1;}
        }
        .slideTextFromBottom {
            animation-name: slideTextFromBottom;
            animation-duration: 0.7s;
            animation-timing-function: ease-out;
        }
        @keyframes slideTextFromBottom {
            from {opacity: 0;margin-top: 100px}
            to {opacity: 1;margin-top: 0px;}
        }
        .slideTextFromTop {
            animation-name: slideTextFromTop;
            animation-duration: 0.7s;
            animation-timing-function: ease-out;
        }
        @keyframes slideTextFromTop {
            from {opacity: 0;margin-top: -100px}
            to {opacity: 1;margin-top: 0px;}
        }
        .testimonial .carousel-inner p{
            color: #ffffff;
            font-size: 20px;
            font-weight: lighter;
            text-align: center;
        }
        
        .projectFactsWrap .item p.number {
            font-size: 30px;
            padding: 0;
            font-weight: bold;
        }
    
        .projectFactsWrap .item p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 15px;
            margin: 0;
            padding: 10px;
            font-family: 'Open Sans';
        }
       .fancy-about-us-area {
            padding-top: 35px;
            padding-bottom: 50px;
        }
        .projectFactsWrap {
            padding-right: 0px;
        }
          .projectFactsWrap .item {
            padding: 50px 15px;
        }
        .recom-item .recom-media .manoj-pundir {
            width:305px;
           
        }
       
       .single-service-area {
            margin-bottom: 140px;
            padding-left: 60px;
            padding-right: 60px;
        }
        
         .recom-item .recom-media .manoj-pundir {
            position: relative;
            z-index: 1;
            width: 150%;
            height: 240px;
            float: right;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
            min-height: 240px;
        }
        
        
        .recom-item .recom-media .manoj-pundir:hover {
            
            width: 125%;
            height:100%;
        }
        
       .solu-blog figure {
        /*background: #0065ae;*/
        background: #000;
        }
        .solu-blog figure:hover {
        background: #0065ae;
        }
        .solu-blog figure img {
            opacity:0.5;
        }
        .solu-blog span{
            font-size:20px;
        }
        .image-resize{
            height: 282px;
            width:420px;
        } 
        *{
          margin: 0;
          padding: 0;
          font-family: "Open Sans",sans-serif;
        }
        
        .blog-posts{
          width: min(1200px, 100%);
          padding: 20px;
          display: flex;
          justify-content: space-between;
          flex-wrap: wrap;
          cursor: pointer;
        }
        
        .post{
          width: calc(33% - 10px);
          overflow: hidden;
          height: 372px;
        }
        
        .post-img{
          width: 100%;
          border-radius: 6px;
          transition: .3s linear;
        }
        
        .post-content{
          background-color: rgba(4,8,29,0.85);
          margin: 0 20px;
          padding: 30px;
          border-radius: 6px;
          transform: translateY(-60px);
          transition: .3s linear;
        }
        
        .post-content h3{
          font-size: 16px;
          margin-bottom: 10px;
        }
        
        .date{
          font-size: 15px;
          font-style: italic;
          color: #e77f67;
        }
        
        .post:hover .post-img{
          transform: translateY(20px);
        }
        /*=====================================START=====================================*/
         .post:hover .post{
            height: 372px;
        }

        .post:hover .post-content{
          transform: translateY(-262px);
          height: 282px;
          width: 100%;
          margin-left: 0px;
        }
        .hide-text{
          display: none;
          font-size: 12px !important;
          color: white;
          padding-top: 8px;
          text-align: center;
        }

        .post:hover .hide-text{
          display: block;
        }

        .post:hover .pc-lngptxt-1{
            padding-top: 95px;
        }

        .post:hover .pc-lngptxt-2{
            padding-top: 60px;
        }
        .center{
            font-family: Gilroy-Medium,Arial;
            font-size: 1.775rem !important;
            line-height: 1.75rem !important;
            letter-spacing: .01136em !important;
        } 
        .hide-text{
            font-family: Gilroy-Medium,Arial;
            font-size: 0.875rem !important;
            line-height: 1.75rem !important;
            letter-spacing: .02136em !important;
        }

        /*======================================END=======================================*/
        @media screen and (max-width: 1200px){
          .blog-posts{
            justify-content: center;
          }
          .post{
            width: min(600px, 100%);
          }
        
        }
        .galleryContainer:hover{
           
            box-shadow: 1px 0px 30px 25px #00000078;
           
        }
        /*.recom-item .recom-media .manoj-pundir:hover {*/
        /*     width: 30rem;*/
        /*     height: 0rem;*/
        /*}*/
    </style>
@endpush
@section('content')
     <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">

        <div class="carousel-inner">
            @if(isset($page))
                @foreach($page->getBanner()->getBannerDetail() as $key=>$banner)
                    <div class="carousel-item @if($key==0) active @endif">
                        <img class="d-block w-100" src="{{Storage::url($banner->getFeaturedImage())}}" alt="">
                    </div>
                @endforeach
            @endif
        </div>


    </div>
    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img" style="position:absolute; top:0px;">
        <div class="container h-100" >
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-8">
                    <div class="fancy-hero-content">

                        <h2>{{$homePageHero->getTitle()}}</h2>
                        {!! $homePageHero->getContent() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End **** -->

    <!--@if(!empty($youtubeVideos))-->
    <!--<div class="fancy-top-features-area">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-12">-->
    <!--                <div class="fancy-top-features-content">-->
    <!--                    <div class="no-gutters">-->
    <!--                        <div class="col-md-12">-->
                <!--            <div class="embed-responsive embed-responsive-16by9 d-sm-block d-md-none">-->
    <!--                            <div class="text-center">-->
    <!--                                <iframe class="embed-responsive-item" width="700" height="365" src="{{$youtubeVideos[0]->getAdditionalFields()[0]->getFieldValue()}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    <!--                            </div>-->
    <!--                        </div>-->
                <!--            <div class="d-xs-none d-md-block">-->
    <!--                            <div class="text-center">-->
    <!--                                <iframe class="embed-responsive-item" width="700" height="365" src="{{$youtubeVideos[0]->getAdditionalFields()[0]->getFieldValue()}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
    <!--                            </div>-->
    <!--                        </div>-->
                <!--            </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--@endif-->
    <!-- ***** Top Feature Area End ***** -->
    <!-- ***** About Us Area Start ***** -->
    @if(isset($solutions))
        <section class="fancy-about-us-area">
            <div class="container">

                <div class="about-us-text mb-5">
                    <h2>Our Solutions</h2>
                </div>
                <div class="row justify-content-center">
                    @foreach($solutions as $solution)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="solu-blog column">
                                <a href="{{ $solution->getLink() }}">
                                <div>
                                    <figure><img src="{{Storage::url($solution->getFeaturedImage())}}" class="img-fluid" /></figure>
                                    <span>{{$solution->getTitle()}}</span>
                                </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- ***** About Us Area End ***** -->
   
   
   <!---
   
   
   ------>
   
   
   
   
   
    @if(isset($books))
        <section class="com-sect">
            <div class="container">
                <div class="about-us-text mb-5">
                    <h2>OUR BOOKS</h2>
                </div>
        
        
        <!--div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active" style="background:#FBA01B;"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"  style="background:#FBA01B;"></li>
                        </ol>

             
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center">
                                    
                                    <div class="col-12 col-sm-6 col-lg-5">
                                        <div class="recom-item">
                                            <div class="recom-media">
                                                <a href="#">
                                                    <div class="">
                                                        <img class="img-fluid" src="images/buddha--disciples.jpg" alt="books">
                                                    </div>
                                                </a>
                                            </div>
                            <!--div class="recom-item-body">
                                                <h3>Wisdom Stories For you & Your Growth</h3>
                                            </div>
                                        </div>
                                    </div>
              
                      <!--div class="col-12 col-sm-6 col-lg-5">
                                        <div class="recom-item manoj-item">
                                            <div class="recom-media">
                                                <a href="#">
                                                    <div class="manoj-pundir">
                                                        <img class="img-fluid img-responsive" src="{{url('images/Manoj Pundir.jpg')}}"  alt="Manoj Pundir.jpg">
                                                    </div>
                                                </a>
                                            </div>
                              <div class="recom-item-body">
                                                <h3>Success Stories Of Business Leaders</h3>
                                            </div>
                                        </div>
                                    </div>
                                
                                    
                                    
                                </div>
                            </div>
              
              <!--div class="carousel-item ">
                                <div class="row justify-content-center">
                                    
                                   <div class="col-12 col-sm-6 col-lg-5">
                                        <div class="recom-item">
                                            <div class="recom-media">
                                                <a href="#">
                                                    <div class="">
                                                        <img class="img-fluid " src="images/Buddha-blue.jpg" alt="books">
                                                    </div>
                                                </a>
                                            </div>
                            <!--div class="recom-item-body">
                                                <h3>Positive & Powerful Thoughts</h>
                                            </div>
                                        </div>
                                    </div>
                  
                      <!--div class="col-12 col-sm-6 col-lg-5">
                                        <div class="recom-item">
                                            <div class="recom-media">
                                                <a href="#">
                                                    <div class="">
                                                        <img class="img-fluid" src="images/Buddha-gold.jpg" alt="books">
                                                    </div>
                                                </a>
                                            </div>
                            <!--div class="recom-item-body">
                                                <h3>Everyday Wisdom For Success</h3>
                                            </div>
                                        </div>
                                    </div> 
                      
                        
                                    
                                </div>
                            </div>

                       </div>
                    <!--/div>
           
                </div>
            <!--/div-->
            <!--dhwani book code end-->
             
        <div class="galleryContainer">
    <div class="slideShowContainer">
        
        <div onclick="plusSlides(-1)" class="nextPrevBtn leftArrow"><span class="arrow arrowLeft"></span></div>
        <div onclick="plusSlides(1)" class="nextPrevBtn rightArrow"><span class="arrow arrowRight"></span></div>
        <div class="captionTextHolder"><p class="captionText slideTextFromTop"></p></div>
        <div class="imageHolder">
            <img src="images/Buddha-gold.jpg">
            <p class="captionText" >Everyday Wisdom For Success</p>
        </div>
        <div class="imageHolder">
            <img src="images/Manoj Pundir.jpg">
            <p class="captionText" >Success Stories Of Buissness Leaders</p>
        </div>
        <div class="imageHolder">
            <img src="images/buddha-disciples.jpg">
            <p class="captionText" >Wisdom Stories For You & Your Growth</p>
        </div>
        <div class="imageHolder">
            <img src="images/Buddha-blue.jpg">
            <p class="captionText" >Positive & Powerful Thoughts</p>
        </div>
    </div>
    <div id="dotsContainer"></div>
</div>
<script src="js/myScript.js"></script>
</section>
<!--dhwani book code end-->
        
        
        
        
        <!--<div class="row justify-content-center">
          @foreach($books as $book)
                        <div class="col-12 col-sm-6 col-lg-5">
                            <div class="recom-item">
                                <div class="recom-media">
                                    <a href="#">
                                        <div class="pic">
                                            <img class="img-fluid" src="{{Storage::url($book->getFeaturedImage())}}" alt="books">
                                        </div>
                                    </a>

                                </div>
                                <div class="recom-item-body">
                                    <h3>{{$book->getTitle()}}</h3>
                                    {{--<a href="#" class="recom-button">Download</a>--}}
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>-->
            </div>
        
    @endif
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <!--<section class="fancy-services-area bg-img bg-overlay com-section" style="background-image: url(images/about-bg.png)">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
                <!-- Single Service -->
    <!--            <div class="col-12 col-md-6">-->
    <!--                <div class="single-service-area wow fadeInUp" data-wow-delay="0.5s">-->
    <!--                    <h1>{{$whyAmyBlock->getTitle()}}</h1>-->
    <!--                    {!! $whyAmyBlock->getContent() !!}-->
    <!--                </div>-->
    <!--            </div>-->
                <!-- Single Service -->
    <!--            <div class="col-12 col-md-5 margin-left">-->
    <!--                <div class="single-service-area wow fadeInUp" data-wow-delay="1s">-->

    <!--                    <div class="row">-->

    <!--                        <h1 class="" style="padding-left:0.4em;">Our Clients</h1>-->
    <!--                        @foreach($clients as $client)-->
    <!--                            @if($client->getFeaturedImage()!=null)-->
    <!--                                <div class="col-12 mb-4 col-md-6">-->
    <!--                                    <img src="{{Storage::url($client->getFeaturedImage())}}">-->
    <!--                                </div>-->
    <!--                            @endif-->
    <!--                        @endforeach-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <div class="container-fluid">
            <div class="row">
               
                <div class="col-12 col-md-6">
                    <section class="fancy-services-area bg-img bg-overlay com-section" style="background-image: url(images/about-bg.png)">
                        <div class="single-service-area wow fadeInUp" data-wow-delay="0.5s">
                            <h2 style="color:white;text-transform: uppercase;">{{$whyAmyBlock->getTitle()}}</h2>
                            {!! $whyAmyBlock->getContent() !!}
                        </div>
                    </section>
                </div>
                
                <div class="col-12 col-md-5 margin-left">
                    <div class="single-service-area wow fadeInUp" data-wow-delay="1s">

                        <div class="row">

                            <h2 class="" style="padding-left:0.4em; color:#343a40; margin-bottom: 50px;">OUR STRATEGIC PARTNERS</h2>
                            @foreach($clients as $client)
                                @if($client->getFeaturedImage()!=null)
                                    <div class="col-12 mb-4 col-md-6">
                                        <img src="{{Storage::url($client->getFeaturedImage())}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Blog Area Start *****
    <section class="fancy-blog-area com-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-text mb-5">
                        <h2>our blogs</h2>

                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="{{asset('images/blog-1.jpg')}}" alt="">
                        <div class="blog-content">
                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                            <p>There’s no denying that the landscape of work is changing. More and more companies are adopting flexible work policies</p>
                            <a href="#">November 23, 2019</a>
                        </div>
                    </div>
                </div>
              
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img src="{{asset('images/blog-2.jpg')}}" alt="">
                        <div class="blog-content">
                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                            <p>There’s no denying that the landscape of work is changing. More and more companies are adopting flexible work policies</p>
                            <a href="#">November 23, 2019</a>
                        </div>
                    </div>
                </div>
              
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <img src="{{asset('images/blog-3.jpg')}}" alt="">
                        <div class="blog-content">
                            <h5><a href="#">Lorem ipsum dolor sit amet</a></h5>
                            <p>There’s no denying that the landscape of work is changing. More and more companies are adopting flexible work policies</p>
                            <a href="#">November 23, 2019</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- Achievements -->
    <div id="projectFacts" class="sectionClass" style="background-image: url(images/1.jpg); background-size: 131rem;">
        <div class="fullWidth eight columns">
           <!-- {!!  $achievementCounter->getContent() !!} -->
           <div class="projectFactsWrap ">
            <div class="row  pt-5">
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                <div class="steps-main">
                <div class="item wow  animated animated" data-number="50+" style="visibility: visible;width: max-content;">
                    <i class="fa fa-briefcase"></i>
                    <p id="number1" class="number">50+</p>
                    <span></span>
                    <p>Indian/MSCs Pharma FMCG Companies</p>
            </div>
                </div>
                </div>
                </div>
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                <div class="steps-main">
                <div class="item wow  animated animated" data-number="200+" style="visibility: visible;">
                    <i class="fa fa-smile-o"></i>
                    <p id="number2" class="number">200+</p>
                    <span></span>
                    <p>Professionals Placed For Top Leadership Role CEO, President, SBU Head, Marketing Head & HR Head</p>
                </div>
                </div>
                </div>
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                <div class="steps-main">
                <div class="item wow  animated animated" data-number="20000+" style="visibility: visible;">
                    <i class="fa fa-coffee"></i>
                    <p id="number3" class="number">20000+</p>
                    <span></span>
                    <p>Professionals Served For Their Career Growth Mid-Level To Top-Level</p>
                </div>
            </div>
                </div>
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                <div class="steps-main">

                <div class="item wow animated animated" data-number="120000+" style="visibility: visible;">
                    <i class="fa fa-camera"></i>
                    <p id="number4" class="number">120000+</p>
                    <span></span>
                    <p> Pharma Professionals Visit Our Website To Connect With Us Every Month</p>
                </div>
               </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jobs -->
    <section class="com-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-text mb-5 wow fadeInUp" data-wow-delay="0.5s">
                        <h2>Recent Jobs</h2>

                    </div>
                </div>
            </div>
            <div class=" wow fadeInUp" data-wow-delay="0.7s">
                <div class="row">
                    @forelse($jobs as $job)
                        <div class="job-d col-lg-6 mx-auto">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="jobs-tittle"><a href="{{ $job->getJobLink() }}">{{$job->getJobTitle()}}</a></div>
                                </div> 
                            
                                <div class="col-md-12">
                                    <div class="jobs-city">{{$job->getJobDescription()}}</div>
                                </div>
                                {{--<div class="post-tm col-md-12 mt-3">--}}
                                    {{--<button data-toggle="modal" data-target="#squarespaceModal" class="btn mt-3 fancy-btn fancy-dark bg-transparent">Apply Now</button>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    @empty
                        <p>No Job found!!</p>
                    @endforelse

                </div>

            </div>
        </div>
    </section>

    <!-- Our Procedure Start -->
    <!--section class="com-section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-text mb-5 wow fadeInUp" data-wow-delay="0.5s">
                        <h2>Our Procedure</h2>
                    </div>
                </div>
            </div>
            <div class="row  pt-5">
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                    <div class="steps-main">
                        <img src="images/browse-icon.png">
                        <h3>We Understand</h3>
                        <!--<a href="#" class="butn">Post a Jobs</a>-->
                    <!--/div>
                <!--/div>
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                    <div class="steps-main">
                        <img src="images/vacancy-icon.png">
                        <h3>We Map </h3>
                        <!--<a href="#" class="butn">Create Alert</a>-->
                    <!--/div>
                </div>
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                    <div class="steps-main">
                        <img src="images/found-icon.png">
                        <h3>We Hunt</h3>
                        <!--<a href="#" class="butn">Upload CV</a>-->
                    <!--/div>
                </div>
                <div class="col-12 col-md-3 col-sm-3 mb-3">
                    <div class="steps-main">
                        <img src="images/start-icon.png">
                        <h3>We Evaluate</h3>
                        <!--<a href="#" class="butn"> Submit</a>-->
                    <!--/div>
                </div>
            </div>    
            <div class="row">    
                <div class="col-12 col-md-4 col-sm-4 mb-3">
                    <div class="steps-main">
                        <img src="images/start-icon.png">
                        <h3>We Check</h3>
                        <!--<a href="#" class="butn"> Submit</a>-->
                    <!--/div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 mb-3">
                    <div class="steps-main">
                        <img src="images/start-icon.png">
                        <h3>We Negotiate</h3>
                        <!--<a href="#" class="butn"> Submit</a>-->
                    <!--/div>
                </div>
                <div class="col-12 col-md-4 col-sm-4 mb-3">
                    <div class="steps-main">
                        <img src="images/start-icon.png">
                        <h3>We Follow Up</h3>
                        <!--<a href="#" class="butn"> Submit</a>-->
                    </div>
                </div>
                
            <!--/div--!>
    <!--/section--!>

    <!-- Our Procedure End -->
    <!-- dhwani Procedure start -->
    <section class="com-section">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-us-text mb-5 wow fadeInUp" data-wow-delay="0.5s">
                        <h2>Our Procedure</h2>
                    </div>
                </div>
            </div>
            <div class="blog-posts">
                <div class="post">
                    <img src="images/weUnderstand1.jpg" alt="" class="post-img image-resize">
                    <div class="post-content pc-lngptxt-1" style="background: linear-gradient(to top left, #f72a0ae0, #5849ccd4);">
                        <h3 align="center" style="color:white; font-size:20px;">We Understand</h3>
                        <p class="hide-text">Company s Recruitment needs; History; Culture; Reporting System</p>
                    </div>
            </div>

            <div class="post">
                    <img src="images/weemap.jpg" alt="" class="post-img image-resize">
                    <div class="post-content pc-lngptxt-1" style="background: linear-gradient(to top right, #92e84499, #004d80);">
                        <h3 align="center" style="color:white; font-size:20px;">We Map</h3>
                        <p class="hide-text">The Candidate s Position, Competency needs, Skill Set</p>
           
                    </div>
         </div>

           <div class="post">
                   <img src="images/hunt.jpg" alt="" class="post-img image-resize">
                   <div class="post-content pc-lngptxt-1" style="background: linear-gradient(-90deg, #ffc107c4, #6bc532e0);">
                        <h3 align="center" style="color:white; font-size:20px;">We Hunt</h3>
                        <p class="hide-text">For the aspirant that meets the above said requirements near to Perfect</p>
            
                      </div>
         </div>
          <div class="post">
                   <img src="images/e2.jpg" alt="" class="post-img image-resize">
                   <div class="post-content pc-lngptxt-2" style="background: linear-gradient(90deg, #f3620ed9, #d62800db);">
                        <h3 align="center" style="color:white; font-size:20px;">We Evaluate</h3>
                        <p class="hide-text">The Company s requirements with the candidate s aspirations. We organize the meeting only when both the parties level up with each other.</p>
            
                       </div>
         </div>
          <div class="post">
                    <img src="images/weCheck1.jpg" alt="" class="post-img image-resize">
                    <div class="post-content pc-lngptxt-2" style="background: linear-gradient(to top left, #925a45d1, #d82f14c7);">
            <h3 align="center" style="color:white; font-size:20px;">We Check</h3>
            <p class="hide-text">Both formally and informally, the interviewee s reference to prevent our Clients (HR) face any unpleasant deeds after hiring services</p>
           
          </div>
        </div>
        <div class="post">
          <img src="images/n2.jpg" alt="" class="post-img image-resize">
          <div class="post-content pc-lngptxt-2" style="background: linear-gradient(to top left, #f72a0ae0, #5849ccd4);">
            <h3 align="center" style="color:white; font-size:20px;">We Negotiate</h3>
            <p class="hide-text">The Mutual compensation requirements, between the clients and the candidates, just in case if the nal appointment fails to match the aspects.</p>
            
          </div>
        </div>
        
          <div class="post mx-auto">
                  <img src="images/f1.jpg" alt="" class="post-img image-resize">
                  <div class="post-content pc-lngptxt-2" style="background: linear-gradient(to top right, #92e84499, #004d80);">
                      <h3 align="center" style="color:white; font-size:20px;">We FollowUp</h3>
                      <p class="hide-text">Both, the clients and the candidates, after few days of stint in organization, to ensure AMY's good recruitment service eorts meets the mutual interest.</p>
        
                        </div>
           </div>
    </div>
</section>
    <!-- dhwani Procedure End -->
    
    <!-- ***** Testimonials ***** -->
    
    @if(isset($testimonials))
        <section class="fancy-cta-area bg-img bg-overlay section-padding-100 testimonial" style="background-image: url(images/testimonial-bg.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="about-us-text mb-5 wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="text-white">Client Testimonials</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-9">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                @foreach($testimonials as $key=>$testimonial)
                                    <li data-target="#myCarousel" class="@if($key==0) active @endif"data-slide-to="{{$key}}"></li>
                                @endforeach
                            </ol>
                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                @foreach($testimonials as $key=>$testimonial)
                                    <div class="item carousel-item @if($key==0) active @endif">
                                        {!! $testimonial->getContent() !!}
                                    </div>
                                @endforeach
                            </div>
                            <!-- Carousel controls -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- ***** CTA Area End ***** -->
@endsection




