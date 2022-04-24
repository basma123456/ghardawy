        <!--=================================
 header start-->
        <nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <!-- logo -->
            <div class="text-left navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="{{url('seller/')}}"><img src="{{asset('assets/images_bg_front/ghardaqa-logo.png')}}" alt=""></a>
                <a class="navbar-brand brand-logo-mini" href="{{url('seller/')}}"><img src="{{asset('assets/images_bg_front/ghardaqa-logo.png')}}"
                        alt=""></a>
            </div>
            <!-- Top bar left -->
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item">
                    <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                        href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
                </li>
            </ul>
            <!-- top bar right -->

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item fullscreen">
                    <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
                </li>
                <li class="nav-item dropdown mr-30">
                    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
       <h3>@if(Auth::guard('seller')->id() > 0){{Auth::guard('seller')->user()->name}}@elseif(Auth::guard('super-admin')->id() > 0){{Auth::guard('super-admin')->user()->name}}  @endif</h3>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header">
                            <div class="media">
                                <div class="media-body">
                                    <span>@if(Auth::guard('seller')->id() > 0){{Auth::guard('seller')->user()->email}}@elseif(Auth::guard('super-admin')->id() > 0){{Auth::guard('super-admin')->user()->email}}  @endif</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="{{ route('logout') }}"
                                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="text-danger ti-unlock"></i>
                            {{ trans('admin_header_side_bar.logout')}}</a>

{{--                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                            {{ __('Logout') }}--}}
{{--                        </a>--}}

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
            <ul>
                <div class="dropdown mx-5">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{App::getLocale()}}
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">

                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            @if($localeCode == 'en' || $localeCode == 'ar')
                                <li class="p-3">
                                    <a class="p-2"  rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach

                    </ul>
                </div>

            </ul>

        </nav>

        <!--=================================
 header End-->
