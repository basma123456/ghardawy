
@extends('layouts_front.master')

@section('css')
    @toastr_css
@section('title')
    {{trans('main_trans.list_students')}}
@stop
@endsection



@section('header')



    <!-- body-header -->
    <div class="body-header-n">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" style="height: 30px;" class="rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" style="height: 30px;" class="rounded-circle" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" style="height: 30px;" class="rounded-circle" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="about-carousel-item carousel-item active">
                    <img src="{{asset('assets/images_bg_front/pexels-pixabay-264512.png')}}" style="object-fit: cover;height: 500px;" class="d-block w-100">
                    <div class="carousel-caption uk-position-top">
                        <p class="text-black uk-text-bolder txt-size-18">12/2/2022</p>
                    </div>
                    <div class="carousel-caption uk-position-center shadow p-3 bg-shadow rounded w-75">
                        <p class="text-black uk-text-bolder txt-size-18">First slide label</p>
                        <p class="text-black uk-text-bolder txt-size-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, eum modi. Aperiam esse magnam reprehenderit perferendis. Atque autem neque nostrum?</p>
                        <p class="text-black uk-text-bolder txt-size-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cum molestiae accusamus dolore iste suscipit ab aliquid ut, optio labore. Praesentium optio iure possimus tenetur cumque mollitia, ex nisi accusantium!</p>
                    </div>
                </div>
                <div class="about-carousel-item carousel-item">
                    <img src="{{asset('assets/images_bg_front/pexels-pixabay-264512.png')}}" style="object-fit: cover;height: 500px;" class="d-block w-100">
                    <div class="carousel-caption uk-position-top">
                        <p class="text-black uk-text-bolder txt-size-18">12/2/2022</p>
                    </div>
                    <div class="carousel-caption uk-position-center shadow p-3 bg-shadow rounded w-75">
                        <p class="text-black uk-text-bolder txt-size-18">First slide label</p>
                        <p class="text-black uk-text-bolder txt-size-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cum molestiae accusamus dolore iste suscipit ab aliquid ut, optio labore. Praesentium</p>
                        <p class="text-black uk-text-bolder txt-size-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cum molestiae accusamus dolore iste suscipit ab aliquid ut, optio labore. Praesentium optio iure possimus tenetur cumque mollitia, ex nisi accusantium!</p>
                    </div>
                </div>
                <div class="about-carousel-item carousel-item">
                    <img src="{{asset('assets/images_bg_front/pexels-pixabay-264512.png')}}" style="object-fit: cover;height: 500px;" class="d-block w-100">
                    <div class="carousel-caption uk-position-top">
                        <p class="text-black uk-text-bolder txt-size-18">12/2/2022</p>
                    </div>
                    <div class="carousel-caption uk-position-center shadow p-3 bg-shadow rounded w-75">
                        <p class="text-black uk-text-bolder txt-size-18">First slide label</p>
                        <p class="text-black uk-text-bolder txt-size-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cum molestiae accusamus dolore iste suscipit ab aliquid ut, optio labore. Praesentium </p>
                        <p class="text-black uk-text-bolder txt-size-md-10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit cum molestiae accusamus dolore iste suscipit ab aliquid ut, optio labore. Praesentium optio iure possimus tenetur cumque mollitia, ex nisi accusantium!</p>
                    </div>
                </div>
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
        <li><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
    </ul>
    <div class="uk-container text-center">
        <div class="row py-5">
            <div class="col-12 col-md-6 order-2 order-md-0">
                <ul class="uk-switcher switcher-container uk-margin">
                    <li class="txt-size-md-10">
                        <div class="container pt-5">
                            <p>1Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                        </div>
                    </li>
                    <li>
                        <div class="container pt-5">
                            <p>2Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                        </div>
                    </li>
                    <li>
                        <div class="container pt-5">
                            <p>3Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="uk-switcher switcher-container uk-margin">
                    <li><img src="{{asset('assets/images_bg_front/img/social2.png')}}" alt=""></li>
                    <li><img src="{{asset('assets/images_bg_front/img/social2.png')}}" alt=""></li>
                    <li><img src="{{asset('assets/images_bg_front/img/social2.png')}}" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <ul class="uk-switcher switcher-container uk-margin">
                    <li class="txt-size-md-10">
                        <div class="container pt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                        </div>
                    </li>
                    <li>
                        <div class="container pt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                        </div>
                    </li>
                    <li>
                        <div class="container pt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis animi blanditiis id? Nesciunt non reprehenderit id enim nobis alias ullam, fugit neque dolor nihil voluptates. Quaerat est saepe ipsa alias.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <ul class="uk-switcher switcher-container uk-margin">
                    <li><img src="{{asset('assets/images_bg_front/img/social2.png')}}" alt=""></li>
                    <li><img src="{{asset('assets/images_bg_front/img/social2.png')}}" alt=""></li>
                    <li><img src="{{asset('assets/images_bg_front/img/social2.png')}}" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End main -->
    <!-- end main -->
@endsection

