
<body>
<!-- Start Header -->
<section class="header">

        @if (request()->url() === url(App::getLocale().'/main') || request()->url() === url(App::getLocale().'/'))
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent uk-position-top">
        <div class="container">
            <img src="{{asset('assets/images_bg_front/ghardaqa-logo.png')}}" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- end-nav -->
            <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">

                <ul class="d-inline">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="d-inline">
                            <a  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <ul class="nav d-lg-flex d-block">
                    <li class="nav-item">
                        <a class="nav-link px-4 active" aria-current="page" href="{{url('main')}}">{{trans('front_header.main')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="{{url('about')}}">{{trans('front_header.about_us')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="{{route('get.cat.region')}}">{{trans('front_header.cats')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="{{url('news')}}">{{trans('front_header.news')}}</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link px-4 text-white border rounded-pill" href="../index.html">العربيه</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">

                <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a href="{{url('apply')}}" class="btn text-decoration-none btn-primary text-white mx-3">{{trans('front_header.add_place')}} <i class="fa-solid fa-store"></i></a>
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
                                    {{trans('front_header.hi')}}  {{auth()->user()->name}}
                                  </b>
                                </span>
                            </p>
                        </li>
                            <li>

                                <p uk-margin>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{trans('front_header.logout')}}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                </p>

                            </li>


                        @endif
                        <li class="nav-item d-lg-none d-block">
                            <p uk-margin>
                                <a class="mx-3 p-1 text-white" href="#modal-group-1" uk-toggle>{{trans('front_header.my_profile')}}</a>
                            </p>
                        </li>
                </ul>

            </div>

        </div>
    </nav>
    @else

        <nav class="navbar navbar-expand-lg navbar-light bg-main">
            <div class="container">
                <img src="{{asset('assets/images_bg_front/ghardaqa-logo.png')}}" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- end-nav -->
                <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">
                    <ul class="d-inline">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li class="d-inline">
                                <a  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" aria-current="page" href="{{url('main')}}">{{trans('front_header.home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 active" href="{{url('about')}}">{{trans('front_header.about_us')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" href="{{route('get.cat.region')}}">{{trans('front_header.cats')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" href="{{url('news')}}">{{trans('front_header.news')}}</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-4 text-white border rounded-pill" href="about-rtl.html">English</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">

                    <ul class="nav d-lg-flex d-block">
                        @if(auth()->id() == null)
                            <li class="nav-item d-lg-block d-none">

                                <p uk-margin>
                                    <a class="txt-col-main mx-3 txt-size-24 p-1" href="#modal-group-1" uk-toggle><i class="text-white fa-solid fa-user"></i></a>
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
                                <a class="mx-3 p-1 text-white" href="#modal-group-1" uk-toggle> {{trans('front_header.my_profile')}}</a>
                            </p>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

    @endif
    @yield('header')
</section>
<!-- End Header -->

