<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        @if(Auth::guard('seller')->id() > 0)
            <div class="side-menu-fixed">
                <div class="scrollbar side-menu-bg">
                    <ul class="nav navbar-nav side-menu" id="sidebarnav">
                        <!-- menu item Dashboard-->
                        <!-- menu item todo-->
                        <li>
                            <a href="{{'/seller/'}}"><i class="ti-menu-alt"></i><span class="right-nav-text font_sidebar">{{trans('seller_side_bar.dashboard')}}</span> </a>
                        </li>

                        <li>
                            <a  href="{{'/seller/places_sellers'}}"><i class="ti-email"></i>
                               <span class="font_sidebar">{{trans('seller_side_bar.place')}}</span> </a>
                        </li>
                     </ul>
                </div>
            </div>
    @endif
    <!-- Left Sidebar End-->

        <!--=================================
