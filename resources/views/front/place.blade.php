
@extends('layouts_front.master')

@section('css')
    @toastr_css
@endsection

@section('header')
    @include('layouts_front.nav')
@endsection


@section('main')

    <!-- start main section -->
<section class="main">
    <div class="container">
        <div class="row my-5">
            <!-- main carousel for product -->
            <div class="col-8">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($photos as $key => $val)
                            @if($key != 6)

                        <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                            {{$key + 1}}
                            <img src="{{asset('assets/images_front/places/')}}/{{$photos[$key + 1]}}" class="d-block w-100" alt="...">
                        </div>
                            @endif
                            @endforeach
                    </div>
                </div>
            </div>
            <!-- mini carousel for product -->
            <div class="col-4 pt-3">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($photos as $key1 => $val1)

                        <div class="carousel-item  {{$key1 == 0 ? 'active' : ''}}">
                            {{$key1}}
                            <img src="{{asset('assets/images_front/places/')}}/{{$photos[$key1]}}" class="d-block w-100" alt="...">
                        </div>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- rate section -->
        <div class="row my-5">
            <div class="about-place col-12">
                <h2>{{$place->title}}.</h2>
                <p>{{$place->desc}}.</p>
            </div>
            <div class="rate bg-main">
                <div class="d-flex align-items-baseline justify-content-around">
                    <p class="text-white">
                        <i class="fa-solid fa-thumbs-up text-primary"></i> like {{(int)$place->likes  + $likes}}
                    </p>
                    <p class="text-white">
                        <i class="fa-solid fa-thumbs-down uk-text-danger"></i> dislike {{(int)$place->unlikes  + $unlikes}}
                    </p>
                </div>
                <p class="text-center text-white text-center">
                    <i class="fa-solid fa-comment"></i> comments @if(isset($place->comments)){{count($place->comments)}} @else 0 @endif
                </p>
            </div>
        </div>
        <!-- info about pleace -->
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <div class="info-place bg-main p-3 my-2 my-md-5">
                    <h3 class="text-white m-0">info</h3>
                    <h4 class="text-white">{{$place->address}}.</h4>
                    <a class="text-white d-block my-3" href="https://goo.gl/maps/vkqmzVCcgk9uca6K8">
                        <i class="fa-solid fa-location-arrow"></i> git direction
                    </a>
                    <a class="text-white d-block my-3" href="tel:200000000000">
                        <i class="fa-solid fa-phone"></i> phone: {{$place->phone}}
                    </a>
                </div>
            </div>
            <!-- 2 imgs for pleace -->
            <div class="col-12 col-md-6 my-2 my-md-5 row">
                <div class="col-6">
                    <img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[5]}}" alt="">
                </div>
                <div class="col-6">
                    <img src="{{asset('assets/images_front/places/')}}/{{$place->photos()[4]}}" alt="">
                </div>
            </div>
        </div>
        <!-- more details for places -->
        <!-- menu -->
        <div class="details-place">
            <h2>Lorem, ipsum dolor menu</h2>
            <div class="row my-5">
                <div class="col-12 col-md-7 my-md-2 my-4 order-1 order-md-0">
                    @foreach($place->menu() as $menu)
                    <img src="{{asset('assets/images_front/places/')}}/{{$menu}}" class="w-100 py-3" alt="">
                    @endforeach
                    <!-- comments -->
                    <div class="uk-card uk-card-primary uk-width-2-2@m">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="{{asset('assets/images_bg_front/pexels-ray-piedra-1478442.png')}}">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Mohamed Mahmoud Etman</h3>
                                </div>
                            </div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <p class="px-3">
                                    <i class="fa-solid fa-thumbs-up text-primary"></i> like
                                </p>
                                <p class="px-3">
                                    since 2 dayes
                                </p>
                            </div>
                        </div>
                        <hr class="list-inline">
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                    <br>
                    <!-- comment -->
                    <div class="uk-card uk-card-primary uk-width-2-2@m">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img class="uk-border-circle" width="40" height="40" src="{{asset('assets/images_bg_front/pexels-ray-piedra-1478442.png')}}">
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">Mohamed Mahmoud Etman</h3>
                                </div>
                            </div>
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <p class="px-3">
                                    <i class="fa-solid fa-thumbs-down uk-text-danger"></i> dislike
                                </p>
                                <p class="px-3">
                                    since 2 dayes
                                </p>
                            </div>
                        </div>
                        <hr class="list-inline">
                        <div class="uk-card-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </div>
{{--                /**********************************additions part*****************************/--}}
                <!-- spiceal places -->

                <div class="col-12 col-md-5 bg-main my-md-2 my-4">
                    <h3 class="text-white">special places</h3>
                    <ol class="list-group list-group-numbered py-3">
                        <!--/**********special parts *********-->
                        @php $i = 0; @endphp
                        @foreach($additions as $key => $val)
                            @if($additions[$key]-> type === 'special' &&  $i < 3))

                            <h2 class="bg-danger"> {{$i++}}</h2>

                            <li class="list-group-item bg-main d-flex justify-content-between align-items-start">
                            <div class="text-white ms-2 me-auto">
                                <div class="fw-bold">{{$additions[$key]->title}}</div>
                                {{$additions[$key]->desc}}
                            </div>
                            <img src="{{asset('assets/images_front/places/')}}/{{$additions[$key]->place->photos()[0]}}" class="w-25" alt="">
                        </li>
                            @endif
                        @endforeach
                    <!--/**********special parts *********-->
                    </ol>

                    <!--/**********ads parts *********-->
                    @php $i = 0; @endphp
                    @foreach($additions as $key => $val)
                        @if($additions[$key]-> type === 'ads' &&  $i < 3))

                        <h2 class="bg-danger"> {{$i++}}</h2>

                        <img src="{{asset('assets/images_front/places/')}}/{{$additions[$key]->place->photos()[0]}}" class="py-3" alt="">
                    <h3 class="text-white">{{$additions[$key]->desc}}.</h3>
                    <hr>
                    @endif
                @endforeach

                    <!--/**********ads parts *********-->


                    <h3 class="text-white">best places</h3>
                    <!-- best pleaces -->
                    <ol class="list-group list-group-numbered py-3">
                        <!--/**********best places parts *********-->
                        @php $i = 0; @endphp
                        @foreach($additions as $key => $val)
                            @if($additions[$key]-> type === 'best' &&  $i < 3))
                            <h2 class="bg-danger"> {{$i++}}</h2>
                            <li class="list-group-item bg-main d-flex justify-content-between align-items-start">
                            <div class="text-white ms-2 me-auto">
                                <div class="fw-bold">{{$additions[$key]->title}}</div>
                                {{$additions[$key]->desc}}
                            </div>
                            <img src="{{asset('assets/images_front/places/')}}/{{$additions[$key]->place->photos()[0]}}" class="w-25" alt="">
                        </li>
                            @endif
                        @endforeach
                    <!--/**********best places parts *********-->
                    </ol>
                </div>
            </div>
            <!-- comments form -->
            <div class="row justify-content-start">
                <form action="{{route('comment.submit' , $id)}}" method="post" class="col-12 col-md-7 border border-primary my-3 p-2 rounded-3">
                   @csrf
                    <div class="mb-3">
                        <h4 class="text-center">write your comment</h4>
                    </div>
                    <div class="d-flex align-items-baseline justify-content-around py-3">
                        <input type="radio" class="btn-check" name="likes" id="danger-outlined" value="{{(int)0}}" autocomplete="off">
                        <label class="btn btn-outline-danger" for="danger-outlined"><i class="fa-solid fa-thumbs-down uk-text-danger"></i> dislike</label>

                        <input type="radio" class="btn-check" name="likes" id="success-outlined" value="{{(int)1}}" autocomplete="off">
                        <label class="btn btn-outline-success" for="success-outlined"> <i class="fa-solid fa-thumbs-up uk-text-success"></i> like</label>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <input type="text" class="form-control" name="name" placeholder="First name">
                        </div>
                        <div class="col-8">
                            <input type="email" class="form-control" name="email" placeholder="email">
                        </div>
                    </div>
                    <div class="my-3">
                        <textarea class="form-control" name="comment" placeholder="write your comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary col-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End main section -->
@endsection