
@extends('layouts_front.master')

@section('css')
    @toastr_css
@section('title')
    {{trans('main_trans.list_students')}}
@stop
@endsection



@section('header')
    <!-- body-header -->

    <body>
    <!-- Start Header -->
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-main">
            <div class="container">
                <img src="../assets/images/ghardaqa-logo.png" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- end-nav -->
                <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">
                    <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" aria-current="page" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 active" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" href="projects.html">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" href="news.html">News</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-4 text-white border rounded-pill" href="about-rtl.html">English</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">
                    <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a href="apply.html" class="btn text-decoration-none btn-primary text-white mx-3">Add Place <i class="fa-solid fa-store"></i></a>
                        </li>
                        <li class="nav-item d-lg-block d-none">
                            <a href="" class="text-white mx-3 txt-size-24 p-1"> <i class="fa-regular fa-user"></i></a>
                        </li>
                        <li class="nav-item d-lg-none d-block">
                            <a href="" class="nav-link px-4 text-white"> profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- body-header -->
        <div class="body-header py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 py-5 order-1 order-sm-0">
                        <div class="container">
                            <p class="uk-text-bolder">Gharda2awy idea</p>
                            @foreach($upper_paragraphsArray as $upperp)
                            <p class="uk-text-bolder">{{$upperp}}.</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        <img src="{{asset('assets/images_front/bg_photos/')}}/{{$about->photo}}" class="w-100 h-100" style="object-fit: none;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->
    <!-- start main -->
    <section class="main">
        <div class="how my-5">
            <div class="container text-center">
                <h3 class="uk-text-bold">How we work</h3>
                <div class="row ">
                    @for($i=0; $i<3; $i++)
                    <div class="col-12 col-md-4 ">
                        <h4 class=" ">Lorem, ipsum dolor.</h4>
                        <p class="bg-main text-white txt-size-12 p-3 rounded-3 ">{{$how_we_work_paragraphsArray[$i]}}.</p>
                    </div>
                        @endfor
                </div>
                <div class="row how-branches">
                    @for($y=3; $y<7; $y++)

                    <div class="col-6 col-md-3 mt-md-0 mt-1">
                        <div class="bg-main text-white txt-size-12 py-3 rounded-3 ">
                            <p>22</p>
                            <p>{{$how_we_work_paragraphsArray[$y]}}</p>
                        </div>
                    </div>
                        @endfor
                </div>
            </div>
        </div>
        <div class="special-cate ">
{{--            {{dd($mYcategories['big_cat'])}}--}}
            <h3 class="uk-text-bolder text-center ">Special Category</h3>
            <div class="my-4 ">
                <div class="uk-cover-container ">
                    <img src="{{asset('assets/images_front/category/')}}/{{$mYcategories['big_cat']->image}}" class="w-100 " alt=" ">
                    <div class="uk-position-top-right pt-4 px-5 uk-panel ">
                        <h1 class="text-white ">{{$mYcategories['big_cat']->title}}</h1>
                        <p class="text-white uk-text-bold ">like {{$mYcategories['big_cat']->likes}}</p>
                        <p class="text-white uk-text-bold ">Places {{$mYcategories['big_cat']->countPlaces}}</p>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row ">
                    <div class="uk-cover-container col-6 ">
                        <img src="{{asset('assets/images_front/category/')}}/{{$mYcategories['first_cat']->image}}" alt=" ">
                        <div class="uk-position-top-center pt-4 uk-panel ">
                            <h1 class="text-white txt-size-sm-24 ">{{$mYcategories['first_cat']->title}}</h1>
                        </div>
                        <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel ">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5 ">like {{$mYcategories['first_cat']->likes}}</p>
                        </div>
                        <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel ">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5 ">Places {{$mYcategories['first_cat']->countPlaces}}</p>
                        </div>
                    </div>
                    <div class="uk-cover-container col-6 ">
                        <img src="{{asset('assets/images_front/category/')}}/{{$mYcategories['last_cat']->image}}" alt=" ">
                        <div class="uk-position-top-center pt-4 uk-panel ">
                            <h1 class="text-white txt-size-sm-24 ">{{$mYcategories['last_cat']->title}}</h1>
                        </div>
                        <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel ">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5 ">like {{$mYcategories['last_cat']->likes}}</p>
                        </div>
                        <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel ">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5 ">Places {{$mYcategories['last_cat']->countPlaces}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end main -->


@endsection
