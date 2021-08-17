@extends('layout.layout')
@section('content')
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">-->
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    
    <style>
    body {
    /*background-color: #434c50;*/
    min-height: 100vh;
    font: normal 16px sans-serif;
    padding: 0px 0;
    }
    
    .container.gallery-container {
        background-color: #fff;
        color: #35373a;
        min-height: 100vh;
        padding: 30px 50px;
    }
    
    .gallery-container h1 {
        text-align: center;
        margin-top: 50px;
        font-family: 'Droid Sans', sans-serif;
        font-weight: bold;
    }
    
    .gallery-container p.page-description {
        text-align: center;
        margin: 25px auto;
        font-size: 18px;
        color: #999;
    }
    
    .tz-gallery {
        padding: 40px;
    }
    
    /* Override bootstrap column paddings */
    .tz-gallery .row > div {
        padding: 2px;
    }
    
    .tz-gallery .lightbox img {
        width: 100%;
        border-radius: 0;
        position: relative;
    }
    
    .tz-gallery .lightbox:before {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -13px;
        margin-left: -13px;
        opacity: 0;
        color: #fff;
        font-size: 26px;
        font-family: 'glyphicon glyphicon-zoom-in';
        content: '\e003';
        pointer-events: none;
        z-index: 9000;
        transition: 0.4s;
    }
    
    
    .tz-gallery .lightbox:after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: rgba(46, 132, 206, 0.7);
        content: '';
        transition: 0.4s;
    }
    
    .tz-gallery .lightbox:hover:after,
    .tz-gallery .lightbox:hover:before {
        opacity: 1;
    }
    
    .baguetteBox-button {
        background-color: transparent !important;
    }
    
    @media(max-width: 768px) {
        body {
            padding: 0;
        }
    }
        
    </style>
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
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events & Seminars</li>
                                <li class="breadcrumb-item active" aria-current="page">Positive Energy Lab</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->
    
    <!--********** Start the image gallery  ************-->
    
    
<div class="container gallery-container">

    <!--<h1>Bootstrap 3 Gallery</h1>-->

    <!--<p class="page-description text-center">Fluid Layout With Overlay Effect</p>-->
    
    <div class="tz-gallery">

        <div class="row">
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/5.jpg">
                    <img src="images/5.jpg" alt="image-5">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/2.jpg">
                    <img src="images/2.jpg" alt="image-2">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/4.jpg">
                    <img src="images/4.jpg" alt="image-4">
                </a>
            </div>
             <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/01.jpg">
                    <img src="images/01.jpg" alt="image-01">
                </a>
            </div>
           
            
            <div class="col-sm-6 col-md-4">
                 <a class="lightbox" href="images/Manoj Pundir.jpg">
                    <img src="images/Manoj Pundir.jpg" alt="image-manoj-pundir">
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="images/6.jpg">
                    <img src="images/6.jpg" alt="image-6">
                </a>
            </div>
           <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="images/3-1.jpg">
                    <img src="images/3-1.jpg" alt="image-3">
                </a>
            </div>

        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
    <!--<div class="container pae-com">-->
    <!--    <div class="row pb-5">-->
    <!--        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">-->
    <!--            <div class="build-img mb-30">-->
    <!--                <img src="images/energy-lab.png">-->
    <!--            </div>-->
    <!--        </div>-->
            
    <!--    </div>-->


        
    <!--</div>-->

    <!--********** End the image gallery  ************-->
    <!--<div class="wpb_wrapper pae-com" style="background:#0161a5;">-->
    <!--    <div class="services-area  pb-85">-->
    <!--        <div class="container">-->
                
    <!--        </div>-->
    <!--    </div>-->

    <!--</div>-->


    <!-- ****** Single Blog Area Start ****** -->
@endsection