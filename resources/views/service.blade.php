@extends('layout.layout')
@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
<style>
    /*example*/

.container{
    width: 110%;
    margin: auto;
    overflow: hidden;
    background: white;
    margin-top: 20px;
  
}

.container ul{
    padding: 0px;
    margin: 0px;
}


.container ul li{
    float:left;
    list-style: none;
    width:20%;
    height:430px;
    background: darkblue;
    margin :20px 0px 20px 55px; 
    border:px solid ;
    box-sizing: border-box;
}
.container ul li:hover{
    opacity: 0.8;
}

.container ul li .bottom{
    width: 100%;
    height:50px;
    line-height: 25px;
    background: orange;    
    text-align: left;
    color:white;
    font-size: 16px;
    
   
}

@media screen and (max-width:1250px){
    .container ul li{
        width:40%;
        margin-left: 40px;
         
    }
    /*example done*/
 
.main-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.wrapper{
    padding: 15px 30px 30px;
    color: #fff;
    border: 2px solid #a01919;
    background-color: #202330;
    transition: 0.3s;
}
.wrapper .icon i{
    font-size: 25px;
    color: #007bff;
}
.wrapper .header{
    font-size: 21px;
    padding-top: 10px;
    padding-bottom: 20px;
}
.wrapper:hover{
    border: 2px solid #a01919;
    box-shadow: 0px 0px 20px #a01919;
    -webkit-transform: scale(1.025);
    -ms-transform: scale(1.025);
    transform: scale(1.025);
    transition: 0.3s;
}
.wrapper:hover .icon i{
    color: #a01919;
}
.readmore a{
    color: #007bff;
    text-decoration: none;
}
.readmore a:hover{
    color: #a01919;
}
</style>
@endpush
@section('content')
<div class="fancy-breadcumb-area bg-img compag" style="background-image: url({{Storage::url($serviceHero->getFeaturedImage())}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="breadcumb-content text-center">
                    {!! $serviceHero->getContent() !!}
                    <!-- Breadcumb -->
                    <nav>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ****** Single Blog Area Start ****** -->
<section class="single_blog_area section-padding-100">
    <div class="container">
        <div class="main-content">
            <h2 class="text-white">Our Feature</h2>
            <div class="row mt-5">

                <div class="col-md-3">
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="header">
                            Responsive Website
                        </div>
                        <div class="sub-title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum
                            <div class="readmore text-right">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-tv"></i>
                        </div>
                        <div class="header">
                            Responsive Website
                        </div>
                        <div class="sub-title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum
                            <div class="readmore text-right">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="header">
                            Responsive Website
                        </div>
                        <div class="sub-title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum
                            <div class="readmore text-right">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-tv"></i>
                        </div>
                        <div class="header">
                            Responsive Website
                        </div>
                        <div class="sub-title">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum
                            <div class="readmore text-right">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection