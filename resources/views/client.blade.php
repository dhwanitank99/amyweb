@extends('layout.layout')
@section('content')
@push('styles')
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.2);
        }
        .company-logo {
          position: relative;
          width: 50%;
          max-width: 300px;
        }
        /* The overlay effect - lays on top of the container and over the image */
       .overlay {
            position: absolute;
            bottom: 0;
            /* background: rgb(0, 0, 0); */
            /* background: rgba(0, 0, 0, 0.5); */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity: 0;
            color: black;
            font-size: 20px;
            margin-left: -36px;
            /* margin: 0 4em 0 0; */
            padding: 10px;
            text-align: center;
        }
          img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  top: 40%;
  transform: translateY(-50%);
}

        /* When you mouse over the container, fade in the overlay title */
        .company-logo:hover .overlay {
        opacity: 1;
        }
    </style>
@endpush
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="fancy-breadcumb-area bg-img compag" style="background-image: url({{Storage::url($clientHero->getFeaturedImage())}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        {!! $clientHero->getContent() !!}
                        <!-- Breadcumb -->
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
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  text-center">
                                            <div class="card shadow-lg p-3 mb-5 bg-white rounded company-logo" style="width: 18rem; height: 13rem; text-align: center;">
                                                <div class="card-body">
                                                    <img src="images/m.png" class="img-fluid" style="width:50%">
                                                    <div class="overlay pt-3 text-center">{{$client->getTitle()}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection