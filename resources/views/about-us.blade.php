@extends('layout.layout')
@push('styles')
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
<style>
   @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap");
   
   /*======== Font and Content design Of about-us sub-menu  =========*/
   
   h1, h2, h3, h4, h5, h6 {
     /*font-family: "Gilroy-Medium,Arial";*/
    color: #232d37 !important;
    line-height: 1.25 !important;
   }
   * {
    /*font-family: "Gilroy-Bold",Arial !important;*/
    /*font-weight: normal !important;*/

    letter-spacing: .00833em !important;

   }
   .aboutus-pnts{
      background-color:rgb(229 233 236);
      padding: 10px;
      padding: 10px;
      box-shadow: -11px 3px 17px 7px #888888;
      margin-top: 50px;
      width: 90%;
      margin-left: 20px;
      margin-bottom:36px;
   }
   
   .outer {
        position: relative;
        font-family: arial; 
    }
   
   /*=============End of content And design ============*/
         * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}
html {
  font-family: "Montserrat";
}

 .container-limit {
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 100px 0;
  background-color: #fff;
} 
.timeline {
  width: 75%;
  height: auto;
  max-width: 800px;
  margin: 0 auto;
  position: relative;
}

.timeline ul {
  list-style: none;
}
.timeline ul li {
  padding: 20px;
  background-color: #1e1f22;
  color: #e77f67;
  border-radius: 10px;
  margin-bottom: 20px;
}
/*.timeline:hover{*/
/*    width:;*/
/*}*/
.timeline ul li:last-child {
  margin-bottom: 0;
}
.timeline-content h1 {
  font-weight: 500;
  font-size: 25px;
  line-height: 30px;
  margin-bottom: 10px;
}
.timeline-content p {
  font-size: 16px;
  line-height: 30px;
  font-weight: 300;
}
.timeline-content .date {
  font-size: 14px;
  font-weight: 300;
  margin-bottom: 10px;
  letter-spacing: 2px;
}
@media only screen and (min-width: 768px) {
  .timeline:before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 2px;
    height: 100%;
    background-color: black;
  }
  .timeline ul li {
    width: 50%;
    position: relative;
    margin-bottom: 50px;
  }
  .timeline ul .resize {
      width:50%;
      height:70%;
      object-fit: cover;
      object-position: center center;
  }
  .timeline ul li:nth-child(odd) {
    float: left;
    clear: right;
    transform: translateX(-30px);
    border-radius: 20px 0px 20px 20px;
  }
  .timeline ul li:nth-child(even) {
    float: right;
    clear: left;
    transform: translateX(30px);
    border-radius: 0px 20px 20px 20px;
  }
  .timeline ul li::before {
    content: "";
    position: absolute;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color: black;
    top: 0px;
  }
  .timeline ul li:nth-child(odd)::before {
    transform: translate(50%, -50%);
    right: -30px;
  }
  .timeline ul li:nth-child(even)::before {
    transform: translate(-50%, -50%);
    left: -30px;
  }
  .timeline-content .date {
    position: absolute;
    top: -30px;
  }
  .timeline ul li:hover::before {
    background-color: darkblue;
  }
}

   .image-resize{
   height: 210px;
   width:400px;
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
   height: 261px;
   }
   .post-img{
   width: 100%;
   border-radius: 6px;
   transition: .3s linear;
   }
   .post-content{
   
   margin: 0 20px 5px;
   padding: 13px;
   border-radius: 6px;
   transform: translateY(-60px);
   transition: .3s linear;
   }
   /*.post:hover .post-content{
   transform: translateY(-15px);
   }*/

   /* ==================Start================== */
   /*Our Work Process & Our Values changes by Shiv Chauhan Date-09-06-2020*/

    .font-from-mindvalley{
      font-family: Noto Sans,sans-serif !important;
      font-weight: 500;
      font-size: 1.06rem;
      line-height: 1.55rem;
      letter-spacing: .04136em !important;
    }

   .top-tringle{
      padding-left: 0px;
      padding-right: 0px;
      width: 0px;
      height: 0px;
      border-left: 170px solid transparent;
      border-right: 170px solid transparent;
      border-bottom: 25px solid  rgb(95 95 95);
      margin-bottom: 2px;
      margin-left: 18px;
   }

   .piller-div{
    width: 95%;
    height: 150px;
    /* border: 1px solid black; */
    margin-right: 6px;
   }
   .p-cap{
      width: 100%;
      height: 9%;
      border-radius: 2px;
   }

    .arr-icon{
      font-size: 18px;
      margin-right: 10px;
    }

   .p-cap1{
      background-color: rgb(10 73 108);
   }
   .p-cap2{
      background-color: rgb(0 174 230);
   }
   .p-cap3{
      background-color: rgb(117 177 67);
   }
   .p-cap4{
      background-color: rgb(217 190 82);
   }
   .p-cap5{
      background-color: rgb(220 141 32);
   }

   .p-m-1{
      border-bottom: 110px solid rgb(10 73 119) !important;
   }
   .p-m-2{
      border-bottom: 110px solid rgb(0 174 239) !important;
   }
   .p-m-3{
      border-bottom: 110px solid rgb(117 192 67) !important;
   }
   .p-m-4{
      border-bottom: 110px solid rgb(222 190 91) !important;
   }
   .p-m-5{
      border-bottom: 110px solid rgb(241 141 32) !important;
   }

   .p-middle{
      /*border: 1px solid black;*/
      width: 100%;
      height: 82%;
      /*border-bottom: 110px solid #333;*/
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      height: 0px;
      width: 85%;
      margin-left: 5px;
   }

   .p-middle p{
      word-spacing: 2px;
      font-size: 9px;
      writing-mode: vertical-lr;
      transform: rotate(180deg);
      text-orientation: sideways;
      height: 106px;
      color: white;
      /*text-align: center;*/
      /*line-height: 37px;*/
   }

   .p-bottom1{
      border-bottom: 1px solid white;
      width: 100%;
      height: 5%;
   }
   .p-bottom2{
      width: 100%;
      height: 4%;
   }
   .p-bottom hr{ 
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
  }

   .post-content h3{
   font-size: 17px;
   margin-bottom: 10px;
   }

   .cod-of-prctic{
      box-shadow: -4px 0px 2px -3px #888888;
   }

   #title-color{
    color: white !important;
   }

    .hide-text{
      display: none;
      font-size: 12px !important;
      color: white;
      padding-top: 8px;
      text-align: center;
    }

   /*Our Work Process & Our Values changes by Shiv Chauhan Date-09-06-2020*/

   /*=====================================Stop================================*/


   /*=====================================Start================================*/

   /* Font Changes, referene-"mindvalley" changes by Shiv Chauhan Date-09-06-2020*/
   
   .abtus-h3{ 
      font-family: Gilroy-Medium,Arial;  
      font-size: 1.275rem !important;
      line-height: 1.75rem !important;
      letter-spacing: .01136em !important;
   }

   .aboutus-pnts p{
      /*font-family: Noto Sans,sans-serif;*/
      font-weight: 400;
      font-size: 1rem;
      line-height: 1.75rem;
      letter-spacing: .04136em !important;
   }
   

   .date{
   font-size: 15px;
   font-style: italic;
   color: #e77f67;
   }
   .post:hover .post-img{
   transform: translateY(20px);
   }
   .post:hover .hide-text{
      display: block;
   }

   .post:hover .pc-lngptxt{
      padding-top: 30px !important;
   }

   .post:hover .post{
      height: 261px;
   }

   .post:hover .post-content{
      height: 210px;
      padding-top: 68px;
      margin: 0px;
      transform: translateY(-190px);
   }

   /*====================================Stop================================*/
   

   @media screen and (max-width: 1200px){
   .blog-posts{
   justify-content: center;
   }
   .post{
   width: min(600px, 100%);
   }
   }
   .galleryContainer:hover{
   box-shadow: 0px 0px 10px 7px #00000078;
   }
   /* about us css code start */
.h3{
  position:relative;
  top:1%;
  margin-left:-2%;
  padding: 5%;
  color: white;
  font-size:1.5;
}

.outer {
    /* width: 700px; */
    /* height: 70px; */
    /* background: rgb(255 122 0); */
    /* text-align: center; */
    /* margin: 35px auto; */
    position: relative;
    box-sizing: border-box;
    /*font-family: arial;*/
}
/*.outer:before{*/
/*  position:absolute;*/
/*  content:'';*/
/*  left:-25px;*/
/*  top:25px;*/
/*  border-top:25px solid transparent;*/
/*  border-right:25px solid #333;*/
/*  border-bottom:25px solid transparent;*/
/*  border-left:25px solid transparent;*/
/*  z-index:-1;*/
/*}*/
/*.outer:after{*/
/*  position:absolute;*/
/*  content:'';*/
/*  right:-25px;*/
/*  top:25px;*/
/*  border-top:25px solid transparent;*/
/*  border-right:25px solid transparent;*/
/*  border-bottom:25px solid transparent;*/
/*  border-left:25px solid #333;*/
/*  z-index:-1;*/
/*}*/
.left{
  position:absolute;
  border-top:25px solid #FF6347;
  border-right:50px solid #FF6347;
  border-bottom:25px solid #FF6347;
  border-left:25px solid transparent;
  top:25px;
  left:-50px;
  z-index:-2;
}
.right{
  position:absolute;
  border-top:25px solid #FF6347;
  border-right:25px solid transparent;
  border-bottom:25px solid #FF6347;
  border-left:50px solid #FF6347;
  top:25px;
  right:-50px;
  z-index:-2;
}

div span{
  display:block;
  line-height:50px;
  height:50px;
  font-weight:bold;
  font-size:28px;
  font-family:arial;
  color:#000;
  text-transform:uppercase;
}
.row h3{
  margin: 0px;
  
}
/* about us css code end */
/* amyvalues  css code start */
body {
  font-family: 'Corben', cursive;

}

.ecosystem {
  position:relative;
  height:45em;
  display:block;
}
.circle {
 -webkit-backface-visibility: hidden;
  display: block;
  border-radius: 50%;
  transition: all .2s ease-in-out;
  position:absolute;
}
.circle span {
  color:#FFFFFF;
  display:block;
  position:relative;
  text-align:center;
  top:38%;
  transform: translateY(-50%);
  font-size: 10px;
}
.circle:nth-child(1){
  background:rgba(229,45,39,0.65);
  width:17em;
  height:17em;
  top: 14%;
  left:40%;
}
.circle:nth-child(2) {
  background:rgba(85,172,238,0.65);
  width:9.5em;
  height:9.5em;
  top: 43%;
  left:35%;
}
.circle:nth-child(3) {
  background:rgba(59,85,152,0.65);
  width:8.5em;
  height:8.5em;
  top: 13%;
  left:29%;
}
.circle:nth-child(4) {
  background:rgba(0,111,70,0.65);
  width:8em;
  height:8em;
  top: 7%;
  left:64%;
}
.circle:nth-child(5) {
  background:rgba(131,193,45,0.65);
  width:8.5em;
  height:8.5em;
  top: 29%;
  left:28%;
}
.circle:nth-child(6) {
  background:rgba(59,85,152,0.65);
  width:9em;
  height:9em;
  top: 21%;
  left:70%;
}
.circle:nth-child(7) {
  background:rgba(0,111,70,0.65);
  width:12.5em;
  height:12.5em;
  top: 5%;
  left:55%;
}
.circle:hover {
  transform: scale(1.3)
}
.circle:nth-child(1):hover {
  background:rgba(229,45,39,0.9);
}
.circle:nth-child(2):hover {
  background:rgba(85,172,238,0.9);
}
.circle:nth-child(3):hover {
  background:rgba(59,85,152,0.9);
}
.circle:nth-child(4):hover {
  background:rgba(0,111,70,0.9);
}
.circle:nth-child(5):hover {
  background:rgba(131,193,45,0.9);
}
.circle:nth-child(6):hover {
  background:rgba(59,85,152,0.9);
}
.circle:nth-child(7):hover {
  background:rgba(0,111,70,0.9);
}
/* amyvalues  css code end */
</style>
@endpush
@section('content')
<!-- ***** Breadcumb Area Start ***** -->
<div class="fancy-breadcumb-area bg-img compag" style="background-image: url({{Storage::url($aboutUsHero->getFeaturedImage())}});">
   <div class="container h-100">
      <div class="row h-100 align-items-center">
         <div class="col-12">
            <div class="breadcumb-content text-center">
               {!! $aboutUsHero->getContent() !!}
               <!-- Breadcumb -->
               <nav>
                  <ol class="breadcrumb justify-content-center">
                     <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">About Us</li>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- ***** Breadcumb Area End ***** -->
<!-- *********Menu and its Contant start from here -->
<section class="single_blog_area com-section">
   <div class="container">
   <div class="row">
      <!-- Sidebar -->
      <div class="col-md-3 col-xs-12">
         <nav id="sidebar" class="marketingpage-block" style="height:100%;">
            <div class="vertical-tabs">
               <ul class="nav nav-tabs list-unstyled components mb-5" role="tablist">
                  <li class="">
                     <a class="nav-link active" data-toggle="tab" href="#pag1" role="tab" aria-controls="home">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a data-toggle="tab" href="#pag2" role="tab" aria-controls="home2">Vision</a>
                  </li>
                  <li class="nav-item">
                     <a data-toggle="tab" href="#pag3" role="tab" aria-controls="home2">Mission</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#pag4" role="tab" aria-controls="messages">Our Story</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#pag5" role="tab" aria-controls="messages">Our Work process</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#pag6" role="tab" aria-controls="messages"> Life @ Amy India</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#pag7" role="tab" aria-controls="messages">Our Values</a>
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
                        <h2 class="pb-4"><!--<!{{$writeUp->getTitle()}}</h2>
                        <p class="pb-4"><img src="images/why.png" class="img-responsive"></p> -->
                       <!-- {!! $writeUp->getContent() !!} -->
                        <h3><b> ABOUT US</b></h3> </br>
                        <h3 class="abtus-h3">Our more than 20 years of research of Pharma / FMCG market has put Professional & Business Owners on the path of Growth and Fulfilment</h3>
                        <div class="aboutus-pnts">
                            <div class="outer"><p style="color:#2d2c2c;"><i class="fa fa-angle-double-right arr-icon" aria-hidden="true"></i>We are currently serving 50+ Indian / MNCs Pharma & FMCG Companies.</p>
                              <!--<div class="left"></div>-->
                              <!--<div class="right"></div>-->
                            </div>
                            <div class="outer"><p style="color:#2d2c2c;"><i class="fa fa-angle-double-right arr-icon" aria-hidden="true"></i>We have assisted more than 120 Professionals in their career growth plan and about more than 200 Strategic Business Heads are placed by us who are managing the business of 1 million.</p>
                              <!--<div class="left"></div>-->
                              <!--<div class="right"></div>-->
                            </div>
                            
                            <div class="outer"><p style="color:#2d2c2c;"><i class="fa fa-angle-double-right arr-icon aria-hidden="true"></i>Our Value-added services for our preferred customers are appreciated by Business Owners / HR Head / SBU Head / Professional at Leadership Role.</p>
                              <!--<div class="left"></div>-->
                              <!--<div class="right"></div>-->
                            </div>
                            <div class="outer"><p style="color:#2d2c2c;"><i class="fa fa-angle-double-right arr-icon" aria-hidden="true"></i>Instituted on 12th Feb 2000 Amy India is today the most preferred consultancy on Pharma / FMCG Industry.</p>
                              <!--<div class="left"></div>-->
                              <!--<div class="right"></div>-->
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tab-pane" id="pag2" role="tabpanel">
               <div class="sv-tab-panel">
                  <h2 class="pb-4">{{$vision->getTitle()}}</h2>
                  {!! $vision->getContent() !!}
               </div>
            </div>
            <div class="tab-pane" id="pag3" role="tabpanel">
               <div class="sv-tab-panel ">
                  <h2 class="pb-4">{{$mission->getTitle()}}</h2>
                  {!! $mission->getContent() !!}
               </div>
            </div>
            <div class="tab-pane" id="pag4" role="tabpanel">
               <div class="sv-tab-panel">
                   <h3 class="text-center">Our Story</h3>
                  <!--Dhwanis code-->
                  <div class="container container-limit">
                     <div class="timeline">
                        <ul>
                           <li  class="resize" style="background-color:rgb(10 73 119);">
                              <div class="timeline-content">
                                    <!--<h3 class="date" style="color:white;">20th may, 2010</h3>-->
                                    <p style="color:white;">Instituted on 12th February 2000</p>
                              </div>
                           </li>
                           <li class="resize" style="background-color:rgb(0 174 239);">
                              <div class="timeline-content" >
                                    <!--<h3 class="date" style="color:white;">20th may, 2010</h3>-->
                                    <p style="color:white;">We are serving more than 50 Pharma Companies and are the most preferred “Human Capital Requirement Service Provider Company”</p>
                              </div>
                           </li>
                           <li class="resize" style="background-color:rgb(117 192 67);">
                              <div class="timeline-content" >
                                    <!--<h3 class="date" style="color:white;">20th may, 2010</h3>-->
                                    <p style="color:white;"> We have assisted over 20000 Professionals (including 200 SBU Heads) in their Career Growth and they are successfully contributing towards the Growth of Pharma Industry with their clear VISION, POSITIVE ATTITUDE and GOOD LEADERSHIP QUALITIES.</p>
                              </div>
                           </li>
                           <li class="resize" style="background-color:rgb(222 190 91);">
                              <div class="timeline-content" >
                                    <!--<h3 class="date" style="color:white;">20th may, 2010</h3>-->
                                    <p style="color:white;">Strong Amy values.</p>
                              </div>
                           </li>
                           <li class="resize" style="background-color:rgb(241 141 32);">
                              <div class="timeline-content" >
                                    <!--<h3 class="date" style="color:white;">20th may, 2010</h3>-->
                                    <p style="color:white;">Strong code of practice</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            
            <div class="tab-pane" id="pag5" role="tabpanel">
               <div class="sv-tab-panel">
                  <!--h2 class="pb-4">{{$workProcess->getTitle()}}</h2-->
                  <section class="com-section bg-gray">
                     <div class="container">
                        <div class="row">
                           <div class="col-12">
                              <div class="about-us-text mb-5 wow fadeInUp" data-wow-delay="0.5s">
                                 <h2>Our Work Process</h2>
                              </div>
                           </div>
                        </div>
                        <div class="blog-posts">
                           <div class="post">
                              <img src="images/weUnderstand1.jpg" alt="" class="post-img image-resize">
                              <div class="post-content" style="background: linear-gradient(to top left, #f72a0ae0, #5849ccd4)">
                                 <h3 align="center" id="title-color">We Understand</h3>
                                 <p class="hide-text">Company s Recruitment needs; History; Culture; Reporting System</p>
                              </div>
                           </div>
                           <div class="post">
                              <img src="images/weemap.jpg" alt="" class="post-img image-resize">
                              <div class="post-content" style="background: linear-gradient(to top right, #92e84499, #004d80)">
                                 <h3 align="center" id="title-color">We Map</h3>
                                 <p class="hide-text">The Candidate s Position, Competency needs, Skill Set</p>
                              </div>
                           </div>
                           <div class="post">
                              <img src="images/hunt.jpg" alt="" class="post-img image-resize">
                              <div class="post-content" style="background: linear-gradient(-90deg, #ffc107c4, #6bc532e0)">
                                 <h3 align="center" id="title-color">We Hunt</h3>
                                 <p class="hide-text">For the aspirant that meets the above said requirements near to Perfect</p>
                              </div>
                           </div>
                           <div class="post">
                              <img src="images/e2.jpg" alt="" class="post-img image-resize">
                              <div class="post-content pc-lngptxt" style="background: linear-gradient(90deg, #f3620ed9, #d62800db)">
                                 <h3 align="center" id="title-color">We Evaluate</h3>
                                 <p class="hide-text">The Company s requirements with the candidate s aspirations. We organize the meeting only when both the parties level up with each other.</p>
                              </div>
                           </div>
                           <div class="post">
                              <img src="images/weCheck1.jpg" alt="" class="post-img image-resize">
                              <div class="post-content pc-lngptxt" style="background: linear-gradient(to top left, #925a45d1, #d82f14c7)">
                                 <h3 align="center" id="title-color">We Check</h3>
                                 <p class="hide-text">Both formally and informally, the interviewee s reference to prevent our Clients (HR) face any unpleasant deeds after hiring services</p>
                              </div>
                           </div>
                           <div class="post">
                              <img src="images/n2.jpg" alt="" class="post-img image-resize">
                              <div class="post-content pc-lngptxt" style="background: linear-gradient(to top left, #f72a0ae0, #5849ccd4)">
                                 <h3 align="center" id="title-color">We Negotiate</h3>
                                 <p class="hide-text">The Mutual compensation requirements, between the clients and the candidates, just in case if the nal appointment fails to match the aspects.</p>
                              </div>
                           </div>
                           <div class="post mx-auto">
                              <img src="images/f1.jpg" alt="" class="post-img image-resize">
                              <div class="post-content pc-lngptxt" style="background: linear-gradient(to top right, #92e84499, #004d80)">
                                 <h3 align="center" id="title-color">We FollowUp</h3>
                                 <p class="hide-text">Both, the clients and the candidates, after few days of stint in organization, to ensure AMY's good recruitment service eorts meets the mutual interest.</p>
                              </div>
                           </div>
                        </div>
                  </section>
                  <!-- {!! $workProcess->getContent() !!}-->
                  </div>
               </div>
               <div class="tab-pane" id="pag6" role="tabpanel">
                  <div class="sv-tab-panel">
                     <h2 class="pb-4">{{$lifeAmyindia->getTitle()}}</h2>
                     {!! $lifeAmyindia->getContent() !!}
                  </div>
               </div>
               <div class="tab-pane" id="pag7" role="tabpanel">
                  <div class="sv-tab-panel">
                        <!--<h2 class="pb-2">{{$ourValues->getTitle()}}</h2>-->
                        <!--    <p>{!! $ourValues->getContent() !!}<p>-->
                                
                                <!--==start 9/5/20 ===-->
                                
                                <h3 class="text-center"><b>Amy Prayer</b></h3>
                                <p class="text-center font-from-mindvalley pt-3">In Amy India, we are known and respected as Good Human Beings, Honest, Sincere and Hard Working Individuals. We add great value to the professional and personal lives of Pharma Professionals. We serve Pharma Organizations (Amy India's Strategic
                                    Business Partners) with Honesty and Sincerity applying Amy's Recruitment Process. We love Life
                                    and Live every day with Gratitude
                                </p>
                                <br>
                                <div class="row pt-5">
                                    <div class="col-md-6">
                                        <h3 class="text-center"><b>Our Values</b></h3></h3>
                                        <p class="text-center pt-3"></p>
                                        <div class="col-md-12 top-tringle"></div>
                                        <div class="col-md-12" style="display: inline-flex;">
                                          <div class="piller-div">
                                            <div class="p-cap p-cap1"></div>
                                            <div class="p-middle p-m-1"><p class="display-2" style="line-height: 34px;">QUALITY OF WORK </p></div>
                                            <div class="p-bottom1 p-cap1"></div>
                                            <div class="p-bottom2 p-cap1"></div>
                                          </div>
                                          <div class="piller-div">
                                            <div class="p-cap p-cap2"></div>
                                            <div class="p-middle p-m-2"><p class="display-2" style="line-height: 34px;">TIMELY RESPONSE </p></div>
                                            <div class="p-bottom1 p-cap2"></div>
                                            <div class="p-bottom2 p-cap2"></div>
                                          </div>
                                          <div class="piller-div">
                                            <div class="p-cap p-cap3"></div>
                                            <div class="p-middle p-m-3"><p class="display-2" style="line-height: 34px;">RESULT ORIENTED </p></div>
                                            <div class="p-bottom1 p-cap3"></div>
                                            <div class="p-bottom2 p-cap3"></div>
                                          </div>
                                          <div class="piller-div">
                                            <div class="p-cap p-cap4"></div>
                                            <div class="p-middle p-m-4"><p class="display-2" style="line-height: 34px;">TEAM WORK </p></div>
                                            <div class="p-bottom1 p-cap4"></div>
                                            <div class="p-bottom2 p-cap4"></div>
                                          </div>
                                          <div class="piller-div">
                                            <div class="p-cap p-cap5"></div>
                                            <div class="p-middle p-m-5"><p class="display-2" style="line-height: 17px;">POSITIVE ATTITUDE SERVING & </p></div>
                                            <div class="p-bottom1 p-cap5"></div>
                                            <div class="p-bottom2 p-cap5"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <hr>
                                     <div class="col-md-6 cod-of-prctic">
                                        <h3 class="text-center"><b>Code Of Practice</b></h3>
                                        <p class="text-center font-from-mindvalley pt-3">"To maintain professionally, a high level of confidentiality and reliability while delivering 
                                            and fulfilling the human capital requirement service, regardless of whether it is a Pharmaceutical Company and/or is a Pharma Professionals".
                                        </p>
                                    </div>
                                </div>
                              
                               
                               
                                
                                <!--===End==-->
                                
                           
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


