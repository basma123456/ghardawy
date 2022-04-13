
@extends('layouts_front.master')

@section('css')
    @toastr_css
@endsection

@section('header')
    @include('layouts_front.nav')
@endsection


@section('main')
    <!-- body-header -->
    <div class="body-header-n">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" style="height: 30px;" class="rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="height: 30px;" class="rounded-circle" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="height: 30px;" class="rounded-circle" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                {{$i = 1}}
                @foreach($arr as $last)
                    {{$i++}}

                    <div class="about-carousel-item carousel-item  {{$i === 2 ? 'active' : ''}}">
                        <img src="{{asset('assets/images_front/news/')}}/{{$last->image}}" style="object-fit: cover;height: 500px;" class="d-block w-100">
                        <div class="carousel-caption uk-position-top">
                            <p class="text-black uk-text-bolder txt-size-18">{{$last->created_at}}</p>
                        </div>
                        <div class="carousel-caption uk-position-center shadow p-3 bg-shadow rounded w-75">
                            <p class="text-black uk-text-bolder txt-size-18">{{$last->label}}</p>
                            <p class="text-black uk-text-bolder txt-size-md-10">{{$last->main_p}}</p>
                            <p class="text-black uk-text-bolder txt-size-md-10">{{$last->first_p}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="txt-col-main txt-size-47 "> <i class="fa fa-arrow-left"></i> </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="txt-col-main txt-size-47 "> <i class="fa fa-arrow-right"></i> </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    </section>
    <!-- End Header -->
    <!-- start main -->
    <section class="main main-news">
        <ul class="uk-subnav uk-subnav-pill justify-content-center" uk-switcher="connect: .switcher-container">
{{--            @foreach($cats as $key => $val)--}}
{{--                <li><a href="#">{{$newscats[$key]->title}}</a></li>--}}
{{--                <li><a href="#">  {{\Illuminate\Support\Str::limit($newscats[$key]->title, 3)}}</a>--}}
{{--            @endforeach--}}
{{--                {{ $cats->links() }}--}}



            @foreach ($cats as $key => $val)
                <li style="max-width: 10em; max-height: 3em;" class="list-group-item" ><a  style="width:100%; height: 100%;"  href="">{{ $cats[$key]->title }}</a></li>
            @endforeach
        </ul>

        <div class="uk-container text-center">
            <div class="row py-5">
                <div class="col-12 col-md-6 order-2 order-md-0">
                    <ul class="uk-switcher switcher-container uk-margin">
                        @foreach($newscats as $newscat)
                            <li class="txt-size-md-10">
                                <div class="container pt-5">
                                    @foreach($newscat->news as $m)
                                        @if ($loop->even && $loop->parent->even)

                                            <p>{{$m->main_p }}</p>
                                            <p>{{$m->first_p }}</p>
                                            <p>{{$m->second_p }}</p>
                                            <p>{{$m->third_p }}</p>
                                     @elseif($loop->even && $loop->parent->odd)

                                            <p>{{$m->main_p }}</p>
                                            <p>{{$m->first_p }}</p>
                                            <p>{{$m->second_p }}</p>
                                            <p>{{$m->third_p }}</p>

                                        @endif
                                    @endforeach

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-6 ">
                    <ul class="uk-switcher switcher-container uk-margin">
                        @foreach($newscats as $newscat)
                            <li>
                                @foreach($newscat->news as $m)
                                    @if ($loop->even && $loop->parent->even)
                                        <img src="{{asset('assets/images_front/news/')}}/{{$m->image}}" alt="">
                                        @elseif($loop->even && $loop->parent->odd)
                                        <img src="{{asset('assets/images_front/news/')}}/{{$m->image}}" alt="">

                                    @endif
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <ul c   lass="uk-switcher switcher-container uk-margin">
                        @foreach($newscats as $newscat)

                            <li class="txt-size-md-10">
                                <div class="container pt-5">
                                    @foreach($newscat->news as $m)
                                        @if ($loop->odd && $loop->parent->even)

                                            <p>{{$m->main_p }}</p>
                                            <p>{{$m->first_p }}</p>
                                            <p>{{$m->second_p }}</p>
                                            <p>{{$m->third_p }}</p>

                                        @elseif($loop->odd && $loop->parent->odd)
                                            <p>{{$m->main_p }}</p>
                                            <p>{{$m->first_p }}</p>
                                            <p>{{$m->second_p }}</p>
                                            <p>{{$m->third_p }}</p>


                                        @endif
                                    @endforeach

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="uk-switcher switcher-container uk-margin">
                        @foreach($newscats as $newscat)

                            <li>
                                @foreach($newscat->news as $m)
                                    @if ($loop->odd && $loop->parent->odd)

                                        <img src="{{asset('assets/images_front/news/')}}/{{$m->image}}" alt="">
                                        @elseif($loop->odd && $parent->parent->even)
                                        <img src="{{asset('assets/images_front/news/')}}/{{$m->image}}" alt="">

                                    @endif
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End main -->
    <!-- end main -->
@endsection

