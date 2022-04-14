
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
                <ul class="nav d-lg-flex d-block">
                    <li class="nav-item">
                        <a class="nav-link px-4 active" aria-current="page" href="{{url('main')}}">الرئيسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4 text-white" href="{{url('about')}}">عنا</a>
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
                            <a href="{{url('apply')}}" class="btn text-decoration-none btn-primary text-white mx-3">اضف مكانا <i class="fa-solid fa-store"></i></a>
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
                    <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" aria-current="page" href="{{'main'}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 active" href="{{'about'}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" href="{{'places'}}">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-4 text-white" href="{{'news'}}">News</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-4 text-white border rounded-pill" href="about-rtl.html">English</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse justify-content-end bg-main-lg" id="navbarSupportedContent">
                    <ul class="nav d-lg-flex d-block">
                        <li class="nav-item">
                            <a href="{{'apply'}}" class="btn text-decoration-none btn-primary text-white mx-3">Add Place <i class="fa-solid fa-store"></i></a>
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

    @endif
    @yield('header')
</section>
<!-- End Header -->

