<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        @if(Auth::guard('super-admin')->id() > 0)
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <!-- menu item todo-->
                    <li>
                        <a href="{{'/super-admin/'}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{trans('admin_side_bar.dashboard')}}</span> </a>
                    </li>
                    <!-- menu item chat-->

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('admin_side_bar.applications')}}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse w-100" data-parent="#sidebarnav">
                            <li> <a href="{{url('super-admin/apply_place')}}">{{trans('admin_side_bar.applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/unseen_applications')}}">{{trans('admin_side_bar.unseen_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/seen_applications')}}">{{trans('admin_side_bar.seen_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/called_applications')}}">{{trans('admin_side_bar.called_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/postponed_applications')}}">{{trans('admin_side_bar.postponed_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/accepted_applications')}}">{{trans('admin_side_bar.accepted_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/rejected_applications')}}">{{trans('admin_side_bar.rejected_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/no_action_yet_applications')}}">{{trans('admin_side_bar.no_action_yet_applications')}}</a> </li>


                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">{{trans('admin_side_bar.sellers')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{'/super-admin/active/sellers'}}">{{trans('admin_side_bar.active_sellers')}}</a> </li>
                            <li> <a href="{{'/super-admin/un_active/sellers'}}">{{trans('admin_side_bar.de_active_sellers')}}</a> </li>
                        </ul>
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="{{'/super-admin/roles'}}"><i class="ti-menu-alt"></i><span class="right-nav-text">{{trans('admin_side_bar.roles')}}</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="{{'/super-admin/main'}}"><i class="ti-comments"></i><span class="right-nav-text">{{trans('admin_side_bar.main')}}
                            </span></a>
                    </li>
                    <!-- menu item mail-->
                    <li>
                        <a href="{{'/super-admin/category'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.category')}}
                              </span>  </a>
                    </li>
                    <!-- menu item Charts-->
                    <!-- menu item mail-->
                    <li>
                        <a href="{{'/super-admin/places'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.places')}}
                              </span>  </a>
                    </li>
                    <!-- menu item Charts-->
                    <li>
                        <a href="{{'/super-admin/about_page'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.about_page')}}
                              </span>  </a>
                    </li>
                    <!-- menu item Charts-->
                    <!-- menu item Charts-->
                    <li>
                        <a href="{{'/super-admin/regions'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.regions')}}
                             </span>   </a>
                    </li>
                    <!-- menu item Charts-->

                    <li>
                        <a href="{{'/super-admin/additions'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.additions')}}
                              </span>  </a>
                    </li>
                    <!-- menu item Charts-->


                    <li>
                        <a href="{{'/super-admin/news'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.news')}}
                               </span> </a>
                    </li>
                    <!-- menu item Charts-->

                    <li>
                        <a href="{{'/super-admin/newscats'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.newscats')}}
                              </span>  </a>
                    </li>
                    <!-- menu item Charts-->
                    <li>
                        <a href="{{'/super-admin/footer'}}"><i class="ti-email"></i><span class="right-nav-text">{{trans('admin_side_bar.footer')}}
                              </span>  </a>
                    </li>
                    <!-- menu item Charts-->

                </ul>

            </div>
        </div>

        @endif
        <!-- Left Sidebar End-->

        <!--=================================-->
    </div>
</div>
