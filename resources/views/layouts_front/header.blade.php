<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('assets/css_front/all.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css_front/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css_front/main-rtl.css')}}">
    <link rel="stylesheet" href="{{url('assets/css_front/uikit.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/layouts/app')}}">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Gharda2wy</title>
</head>

<body>
<!-- Start Header -->
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent uk-position-top">
        <div class="container">
            <img src="{{asset('assets/images_bg_front/ghardaqa-logo.png')}}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end-nav -->
            <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">
                <ul class="nav d-lg-flex d-block">
                    <li class="nav-item">
                        <a class="nav-link px-4 active" aria-current="page" href="{{url('main')}}">الرئيسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="about-rtl.html">عنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="{{route('get.cat.region')}}">الاقسام</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="{{url('news')}}">الاخبار</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link px-4 text-white border rounded-pill" href="../index.html">العربيه</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">
                <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a href="apply-rtl.html" class="btn text-decoration-none btn-primary text-white mx-3">اضف مكانا <i class="fa-solid fa-store"></i></a>
                        </li>
                        @if(auth()->id() == null)
                        <li class="nav-item d-lg-block d-none">

                        <p uk-margin>
                            <a class="txt-col-main mx-3 txt-size-24 p-1" href="#modal-group-1" uk-toggle><i class="fa-solid fa-user"></i></a>
                        </p>
                        </li>

                        @else
                        <li class="nav-item d-lg-block d-none">

                        <p uk-margin>
                                <span  class="mx-3 p-1 text-white">
                                  <b>
                                    Hi  {{auth()->user()->name}}
                                  </b>
                                </span>
                            </p>
                        </li>
                            <li>

                                <p uk-margin>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                </p>

                            </li>


                        @endif
                        <li class="nav-item d-lg-none d-block">
                            <p uk-margin>
                                <a class="mx-3 p-1 text-white" href="#modal-group-1" uk-toggle>الملف الشخصي</a>
                            </p>
                        </li>
                </ul>

{{--                <ul class="navbar-nav ml-auto">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @guest--}}
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        </li>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <li class="nav-item">--}}
{{--                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                            </li>--}}
{{--                        @endif--}}

{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}



{{--                    @endguest--}}
{{--                </ul>--}}


            </div>

        </div>
    </nav>
    @yield('header')
</section>
<!-- End Header -->

