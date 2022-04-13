
@extends('layouts_front.master')

@section('css')
        @toastr_css
    @section('title')
        {{trans('main_trans.list_students')}}
    @stop
@endsection



@section('header')
    <!-- body-header -->
    <div class="body-header">
        <div class="row">
            <div class="para-header col-lg-4 col-md-12 order-1 order-lg-0 position-relative">
                <div class="container">
                    <p class="uk-text-bolder">Gharda2wy.com</p>
                    <p class="uk-text-bolder">{{$mains->title1}}<span class="txt-col-main">الافضل</span></p>
                    <p class="txt-size-18 uk-text-bolder txt-col-main">{{$mains->title2}}</p>
                    <p class="txt-size-10 txt-col-second">{{$mains->top_desc}} </p>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <img src="{{asset('/assets/images_front/bg_photos/')}}/{{$mains->bg_photo}}" class="w-100" alt="">
            </div>
            <form  method="get" action="{{route('get.cat.region')}}"   class="search col-lg-5 col-12 my-4 m-auto border border-primary p-0 shadow w-85-md">
                <div class="d-flex justify-content-around">
                    <select name="cat_id" class="form-select rounded-0 text-center txt-col-main uk-text-bolder py-3" aria-label="Default select example">
                        <option selected>الاقسام</option>
                        @isset($cats)

                            @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        @endisset
                    </select>
                    <select name="region_id" class="form-select rounded-0 text-center txt-col-main uk-text-bolder py-3" aria-label="Default select example">
                        <option selected>الكل </option>
                        @isset($regions)
                            @foreach($regions as $region)
                        <option value="{{$region->id}}">{{$region->government}} , {{$region->city}} , {{$region->district}}</option>
                            @endforeach
                            @endisset
                    </select>
                </div>
                <input type="submit" class="btn btn-primary w-100 rounded-0 uk-text-bolder py-3" value="بحث" />
            </form>
        </div>
    </div>

@endsection



<!-- start main -->

@section('main')
    <section class="main  my-4">
        <!-- main categories -->
        <div class="main-cate">
            <div class="head-border">
                <h3 class="text-center uk-text-bolder">
                    ابحث عن طريق
                    <span class="txt-col-main">الاقسام</span>
                </h3>
{{--            </div>{{dd($frontCats)}}--}}
            <div class="container">
                @if(isset($frontCats['right_upper_cat']))
                <div class="row">
                    <div class="uk-cover-container col-6">
                        <a href="{{url('places/'. $frontCats['right_upper_cat']->id)}}">

                            <img src="{{asset('assets/images_front/category/')}}/{{$frontCats['right_upper_cat']->image}}" alt="">
                        </a>
                        <div class="uk-position-top-center pt-4 uk-panel">
                            <h1 class="text-white txt-size-sm-24">{{$frontCats['right_upper_cat']->title}}</h1>
                        </div>
                        <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5">اعجاب {{$frontCats['right_upper_cat']->likes}}</p>
                        </div>
                        <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5">{{$frontCats['right_upper_cat']->countPlaces}} مكان</p>
                        </div>
                    </div>
                    <div class="uk-cover-container col-6">
                        <a href="{{url('places/'. $frontCats['left_upper_cat']->id)}}">
                            <img src="{{asset('assets/images_front/category/')}}/{{$frontCats['left_upper_cat']->image}}" alt="">
                        </a>
                        <div class="uk-position-top-center pt-4 uk-panel">
                            <h1 class="text-white txt-size-sm-24">{{$frontCats['left_upper_cat']->title}}</h1>
                        </div>
                        <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5">اعجاب {{$frontCats['left_upper_cat']->likes}}</p>
                        </div>
                        <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white txt-size-sm-12 uk-text-bold px-4 px-sm-5">مكان {{$frontCats['left_upper_cat']->countPlaces}}</p>
                        </div>
                    </div>
                </div>
                    @endisset
            </div>
        </div>
        <div class="my-4">
            @if(isset($frontCats['screen_cat']))

            <div class="uk-cover-container">
                <a href="{{url('places/')}}/{{$frontCats['screen_cat']->id}}">
                    <img src="{{asset('assets/images_front/category/')}}/{{$frontCats['screen_cat']->image}}" class="w-100" alt="">
                </a>
                <div class="uk-position-top-right pt-4 px-5 uk-panel">
                    <h1 class="text-white">{{$frontCats['screen_cat']->title}}</h1>
                    <p class="text-white uk-text-bold">اعجاب {{$frontCats['screen_cat']->likes}}</p>
                    <p class="text-white uk-text-bold">مكان {{$frontCats['screen_cat']->countPlaces}}</p>
                </div>
            </div>
                @endisset
        </div>
        <!-- ather categories -->
        <div class="other-cate my-4">
            <div class="container">
                <div class="row px-3 py-4">
                    @if(isset($frontCats['bottom_big_cat']))

                    <div class="uk-cover-container col-8">
                        <a href="{{url('places/')}}/{{$frontCats['bottom_big_cat']->id}}">
                            <img src="{{asset('assets/images_front/category/')}}/{{$frontCats['bottom_big_cat']->image}}" class="w-100" alt="">
                        </a>
                        <div class="uk-position-top-center pt-4 uk-panel">
                            <h1 class="text-white txt-size-sm-24">{{$frontCats['bottom_big_cat']->title}}</h1>
                        </div>
                        <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white uk-text-bold px-4 px-sm-5">اعجاب {{$frontCats['bottom_big_cat']->likes}}</p>
                        </div>
                        <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white uk-text-bold px-4 px-sm-5">مكان {{$frontCats['bottom_big_cat']->countPlaces}}</p>
                        </div>
                    </div>
                    @endisset

                    <div class="col-4">
                        <a href="{{url('places/')}}/{{$frontCats['bottom_left_upper_cat']->id}}">
                            @if(isset($frontCats['bottom_left_upper_cat']))

                            <div class="uk-cover-container">
                                <img src="{{asset('assets/images_front/category/')}}/{{$frontCats['bottom_left_upper_cat']->image}}" class="w-100" style=" object-fit: cover;" alt="">
                                <div class="uk-position-top-center pt-4 uk-panel">
                                    <h1 class="text-white uk-text-bold txt-size-md-12">{{$frontCats['bottom_left_upper_cat']->title}}</h1>
                                </div>
                                <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel">
                                    <p class="text-white txt-size-md-12 uk-text-bold d-none d-sm-block px-0 px-md-4 px-sm-0 ">اعجاب {{$frontCats['bottom_left_upper_cat']->likes}}</p>
                                </div>
                                <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel">
                                    <p class="text-white txt-size-md-12 uk-text-bold d-none d-sm-block px-0 px-md-4 px-sm-0 ">مكان {{$frontCats['bottom_left_upper_cat']->countPlaces}}</p>
                                </div>
                            </div>
                                @endisset
                        </a>
                        <a href="{{url('places/')}}/{{$frontCats['bottom_left_lower_cat']->id}}">
                            @if(isset($frontCats['bottom_left_lower_cat']))

                            <div class="uk-cover-container">
                                <img src="{{asset('assets/images_front/category/')}}/{{$frontCats['bottom_left_lower_cat']->image}}" class="w-100 pt-5 h-50" style=" object-fit: cover;" alt="">
                                <div class="uk-position-top-center pt-4 uk-panel">
                                    <h1 class="text-white uk-text-bold txt-size-md-12 pt-5">{{$frontCats['bottom_left_lower_cat']->title}}</h1>
                                </div>
                                <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel">
                                    <p class="text-white txt-size-md-12 uk-text-bold d-none d-sm-block px-0 px-md-4 px-sm-0 ">اعجاب {{$frontCats['bottom_left_lower_cat']->likes}}</p>
                                </div>
                                <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel">
                                    <p class="text-white txt-size-md-12 uk-text-bold d-none d-sm-block px-0 px-md-4 px-sm-0 ">مكان {{$frontCats['bottom_left_lower_cat']->countPlaces}}</p>
                                </div>
                            </div>
                                @endisset
                        </a>
                    </div>
                </div>
                <div class="row my-4">
                    @foreach($cats as $cat)
                        @if($cat->at_front_page === 0)

                            <div class="uk-cover-container col-md-4 col-6 my-3">
                        <div class="m-0 m-md-3 m-sm-4">
                            <a href="{{url('places/')}}/{{$cat->id}}">
                                <img class="h-cat" src="{{asset('assets/images_front/category/')}}/{{$cat->image}}" alt="">
                            </a>

                        </div>
                        <div class="uk-position-top-center pt-4 uk-panel">
                            <h1 class="text-white txt-size-sm-24">{{$cat->title}}</h1>
                        </div>
                        <div class="uk-position-bottom-left d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white txt-size-sm-12  uk-text-bold px-3 px-sm-5"> اعجاب    {{$cat->likes}}</p>
                        </div>
                        <div class="uk-position-bottom-right d-flex align-items-baseline pb-4 uk-panel">
                            <p class="text-white txt-size-sm-12  uk-text-bold px-3 px-sm-5">مكان {{$cat->countPlaces}}</p>
                        </div>

                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <!-- best place -->
        <div class="best-place">
            <div class="head-border">
                <h3 class="text-center uk-text-bolder">افضل اماكن <span class="txt-col-main">الغردقه</span> </h3>
            </div>
            <div class="container">
                <div class="my-4">
                    <div class="row">

                        @foreach($additions as $addition)
                            @if($addition->type === 'best')
                        <div class="uk-cover-container col-md-6 col-12 my-3">
                            <a href="{{url('place_page/')}}/{{$addition->place->id}}">
                                <div>
                                    <img src="{{asset('assets/images_front/places/')}}/{{$addition->place->photos()[0]}}" alt="">
                                </div>
                            </a>
                            <div class="uk-position-top-left d-flex mx-2 px-3">
                                <h2 class="text-white m-0 widthPlaceTitle">{{$addition->title}}</h2>
                                <img src="{{asset('assets/images_front/places/')}}/{{$addition->place->photos()[1]}}" class="rounded-circle px-1" style="width: 55px; height: 50px;" alt="">
                            </div>
                            <div class="uk-position-top-right d-flex px-3">
                                <h2 class="text-white">اعجاب {{$addition->place->likes}}</h2>
                            </div>
                            <div class="uk-position-bottom-center d-flex align-items-baseline pb-4 uk-panel">
                                <p class="text-white text-center p-3 p-md-4 p-sm-5">{{$addition->desc}}ا.</p>
                            </div>
                        </div>
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- join us -->
        <div class="join">
            <div class="container">
                <!-- Experiance section -->
                <div class="row">
                    <h3 class="text-center uk-text-bolder">شاركنا خبراتك</h3>
                    <div class="col-md-4 col-12 my-4">
                        <div class="text-center ">
                            <img src="{{asset('assets/images_bg_front/SVGGHARD/Group 431.svg')}}" class="w-25" alt="">
                        </div>
                        <p class="text-center uk-text-bold txt-size-18">{{$mains->left_desc}}</p>
                    </div>
                    <div class="col-md-4 col-12 my-4">
                        <div class="text-center ">
                            <img src="{{asset('assets/images_bg_front/SVGGHARD/Group 432.svg')}}" class="w-25" alt="">
                        </div>
                        <p class="text-center uk-text-bold txt-size-18">و{{$mains->middle_desc}}</p>
                    </div>
                    <div class="col-md-4 col-12 my-4">
                        <div class="text-center ">
                            <img src="{{asset('assets/images_bg_front/SVGGHARD/Group 433.svg')}}" class="w-25" alt="">
                        </div>
                        <p class="text-center uk-text-bold txt-size-18">{{$mains->right_desc}}</p>
                    </div>
                </div>
                <!-- join us section -->
                <span class="text-white"><i></i> </span>
                <div class="join text-center mt-2">
                    <p class="uk-text-bold txt-size-18">
                        انضم الي Gharda2wy.com
                    </p>
                    <a href="#modal-group-1" class="btn bg-main text-white" uk-toggle>انضم الينا</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end main -->
@endsection
