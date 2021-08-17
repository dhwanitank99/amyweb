@extends('layout.layout')
@push('styles')
<style>
    .cool-link::after{
        content: '';
        display: block;
        width: 0;
        height: 2px;
        background: #000000;
        transition: width .3s;

    }
    .cool-link:hover::after{
        width: 50%;
        transition: width .3s;
    }
</style>
@endpush
@section('content')
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img compag" style="background-image: url(images/about.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Ability is what you are capable of doing. </h2>
                        <!-- Breadcumb -->
                        <nav>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events & Seminars</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <div class="container pae-com">
        <div class="row pb-5">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="build-img mb-30">
                    <img src="images/energy-lab.png">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="build-wrapper mb-30">
                    <div class="build-text">
                       <a href="{{ url('/positive-energy') }}" class="cool-link"><h3>Positive Energy lab</h3></a>
                        <p>Positive Energy Lab is an Event organized by Amy India for transforming the Organization. POSITIVE ENERGY LAB (PEL) will empower individuals with experiment and experience many activities which can be followed in day to day life for Personal and Professional Growth. </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                <div class="build-wrapper mb-30">
                    <div class="build-text">
                        <h3>Flagship Events</h3>
                        <ol>
                            <li>PEL Leadership – For Senior Executives</li>
                            <li>PEL Empower – For Mid- Level MANAGERS</li>
                            <li>PEL Harmony – For Junior Level Employees</li>
                        </ol>
                    </div>
                </div>

                <div class="build-wrapper mt-5">
                    <div class="build-text">
                        <h3>Allied Events</h3>
                        <ol>
                            <li>Mind matters - Mind Power and Affirmations</li>
                            <li>Yoga and Meditation - Wellness event for Good Health and Happiness</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                <div class="build-img mb-30">
                    <img src="images/flagship.png">
                </div>
            </div>
        </div>
    </div>


    <div class="wpb_wrapper pae-com" style="background:#0161a5;">
        <div class="services-area  pb-85">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="services-wrapper single-service text-center mb-30">
                            <div class="services-img">
                                <img src="images/Learning.png" alt="">
                            </div>
                            <div class="services-text">
                                <h4>Learning is imparted on</h4>
                                <p>Inspirational Leadership,<br/>Mind power and affirmation, Decision making, Team Building, Yoga and Meditation</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="services-wrapper single-service text-center mb-30">
                            <div class="services-img">
                                <img src="images/growth.png" alt="">
                            </div>
                            <div class="services-text">
                                <h4>Learning is focused on</h4>
                                <p>Health and happiness, Social Growth, Social Growth, Professional Growth, Organization Growth</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                        <div class="services-wrapper single-service text-center mb-30">
                            <div class="services-img">
                                <img src="images/mentor.png" alt=""></a>
                            </div>
                            <div class="services-text">
                                <h4>Mentor and Faculty</h4>
                                <p>Our Faculty are known to be excellent communicator with the ability to powerfully deliver results. They all have rich corporate experience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- ****** Single Blog Area Start ****** -->

    <!--<section class="portfolio section-padding-100" id="portfolio">-->
    <!--    <div class="container">-->
    <!--        <div class="sec-title text-center pb-5">-->
    <!--            <h2>Gallery</h2>-->
    <!--        </div>-->
    <!--        <div class="row isotope_fillter justify-content-center">-->
    <!--            <div align="col-12 col-md-12 gallery_filter">-->
    <!--                <button class="filter-button" data-filter="all">All</button>-->
    <!--                <button class="filter-button" data-filter="category1">Designing</button>-->
    <!--                <button class="filter-button" data-filter="category2">Development</button>-->
    <!--                <button class="filter-button" data-filter="category3">Graphics</button>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--        <div class="row">-->
    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category1">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=122">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=122" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 1</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category2">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=526">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=526" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 2</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category3">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 3</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category1">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=626">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=626" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 4</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category2">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=486">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=486" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 5</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category3">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=846">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=846" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 6</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category1">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1066">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1066" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 7</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category2">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=506">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=506" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 8</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category3">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1026">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1026" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 9</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category1">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=1077">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=1077" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 10</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category2">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=102">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=102" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 11</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--            <div class="gallery_product col-sm-3 col-xs-6 filter category3">-->
    <!--                <a class="fancybox" rel="ligthbox" href="https://picsum.photos/400/250?image=106">-->
    <!--                    <img class="img-responsive" alt="" src="https://picsum.photos/400/250?image=106" />-->
    <!--                    <div class='img-info'>-->
    <!--                        <h4>Image Title 12</h4>-->
    <!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
    <!--                    </div>-->
    <!--                </a>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
@endsection