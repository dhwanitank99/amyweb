@extends('layout.layout')
@section('content')
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img compag" style="background-image: url({{Storage::url($clientHero->getFeaturedImage())}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        {!! $clientHero->getContent() !!}
                        <!-- Breadcumb- -->
                        <nav>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Clients</li>
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
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <!-- Single Post -->
                        <div class="col-12 col-lg-11 col-sm-12">
                            <div class="row">
                                @if(count($clients) > 0)
                                    @foreach($clients as $client)
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pt-5 text-center">
                                            <img src="{{Storage::url($client->getFeaturedImage())}}" class="img-fluid"/>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        </div>
    </section>
@endsection