<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        @can('comments')
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('sidebar.applications')}}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="dashboard" class="collapse w-100" data-parent="#sidebarnav">
                            <li> <a href="{{url('super-admin/apply_place')}}">{{trans('sidebar.applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/unseen_applications')}}">{{trans('sidebar.unseen_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/seen_applications')}}">{{trans('sidebar.seen_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/called_applications')}}">{{trans('sidebar.called_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/postponed_applications')}}">{{trans('sidebar.postponed_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/accepted_applications')}}">{{trans('sidebar.accepted_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/rejected_applications')}}">{{trans('sidebar.rejected_applications')}}</a> </li>
                            <li> <a href="{{url('super-admin/no_action_yet_applications')}}">{{trans('sidebar.no_action_yet_applications')}}</a> </li>


                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Components </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">Elements</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="accordions">Accordions</a></li>
                            <li><a href="alerts">Alerts</a></li>
                            <li><a href="button">Button</a></li>
                            <li><a href="colorpicker">Colorpicker</a></li>
                            <li><a href="dropdown">Dropdown</a></li>
                            <li><a href="lists">lists</a></li>
                            <li><a href="modal">modal</a></li>
                            <li><a href="nav">nav</a></li>
                            <li><a href="nicescroll">nicescroll</a></li>
                            <li><a href="pricing-table">pricing table</a></li>
                            <li><a href="ratings">ratings</a></li>
                            <li><a href="date-picker">date picker</a></li>
                            <li><a href="tabs">tabs</a></li>
                            <li><a href="typography">typography</a></li>
                            <li><a href="popover-tooltips">Popover tooltips</a></li>
                            <li><a href="progress">progress</a></li>
                            <li><a href="switch">switch</a></li>
                            <li><a href="sweetalert2">sweetalert2</a></li>
                            <li><a href="touchspin">touchspin</a></li>
                        </ul>
                    </li>
                    <!-- menu item calendar-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#calendar-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">calendar</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="calendar-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar">Events Calendar </a> </li>
                            <li> <a href="calendar-list">List Calendar</a> </li>
                        </ul>
                    </li>
                    <!-- menu item todo-->
                    <li>
                        <a href="todo-list"><i class="ti-menu-alt"></i><span class="right-nav-text">Todo
                                list</span> </a>
                    </li>
                    <!-- menu item chat-->
                    <li>
                        <a href="chat-page"><i class="ti-comments"></i><span class="right-nav-text">Chat
                            </span></a>
                    </li>
                    <!-- menu item mailbox-->
                    <li>
                        <a href="mail-box"><i class="ti-email"></i><span class="right-nav-text">Mail
                                box</span> <span class="badge badge-pill badge-warning float-right mt-1">HOT</span> </a>
                    </li>
                    <!-- menu item Charts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#chart">
                            <div class="pull-left"><i class="ti-pie-chart"></i><span
                                    class="right-nav-text">Charts</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="chart" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="chart-js">Chart.js</a> </li>
                            <li> <a href="chart-morris">Chart morris </a> </li>
                            <li> <a href="chart-sparkline">Chart Sparkline</a> </li>
                        </ul>
                    </li>

                    <!-- menu font icon-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#font-icon">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">font
                                    icon</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="font-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon">font Awesome</a> </li>
                            <li> <a href="themify-icons">Themify icons</a> </li>
                            <li> <a href="weather-icon">Weather icons</a> </li>
                        </ul>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Widgets, Forms & Tables </li>
                    <!-- menu item Widgets-->
                    <li>
                        <a href="widgets"><i class="ti-blackboard"></i><span class="right-nav-text">Widgets</span>
                            <span class="badge badge-pill badge-danger float-right mt-1">59</span> </a>
                    </li>
                    <!-- menu item Form-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Form">
                            <div class="pull-left"><i class="ti-files"></i><span class="right-nav-text">Form &
                                    Editor</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Form" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="editor">Editor</a> </li>
                            <li> <a href="editor-markdown">Editor Markdown</a> </li>
                            <li> <a href="form-input">Form input</a> </li>
                            <li> <a href="form-validation-jquery">form validation jquery</a> </li>
                            <li> <a href="form-wizard">form wizard</a> </li>
                            <li> <a href="form-repeater">form repeater</a> </li>
                            <li> <a href="input-group">input group</a> </li>
                            <li> <a href="toastr">toastr</a> </li>
                        </ul>
                    </li>
                    <!-- menu item table -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#table">
                            <div class="pull-left"><i class="ti-layout-tab-window"></i><span class="right-nav-text">data
                                    table</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="table" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="data-html-table">Data html table</a> </li>
                            <li> <a href="data-local">Data local</a> </li>
                            <li> <a href="data-table">Data table</a> </li>
                        </ul>
                    </li>
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">More Pages</li>
                    <!-- menu item Custom pages-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#custom-page">
                            <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Custom
                                    pages</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="custom-page" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="projects">projects</a> </li>
                            <li> <a href="project-summary">Projects summary</a> </li>
                            <li> <a href="profile">profile</a> </li>
                            <li> <a href="app-contacts">App contacts</a> </li>
                            <li> <a href="contacts">Contacts</a> </li>
                            <li> <a href="file-manager">file manager</a> </li>
                            <li> <a href="invoice">Invoice</a> </li>
                            <li> <a href="blank">Blank page</a> </li>
                            <li> <a href="layout-container">layout container</a> </li>
                            <li> <a href="error">Error</a> </li>
                            <li> <a href="faqs">faqs</a> </li>
                        </ul>
                    </li>
                    <!-- menu item Authentication-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#authentication">
                            <div class="pull-left"><i class="ti-id-badge"></i><span
                                    class="right-nav-text">Authentication</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="authentication" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="login">login</a> </li>
                            <li> <a href="register">register</a> </li>
                            <li> <a href="lockscreen">Lock screen</a> </li>
                        </ul>
                    </li>
                    <!-- menu item maps-->
                    <li>
                        <a href="maps"><i class="ti-location-pin"></i><span class="right-nav-text">maps</span>
                            <span class="badge badge-pill badge-success float-right mt-1">06</span></a>
                    </li>
                    <!-- menu item timeline-->
                    <li>
                        <a href="timeline"><i class="ti-panel"></i><span class="right-nav-text">timeline</span>
                        </a>
                    </li>
                    <!-- menu item Multi level-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#multi-level">
                            <div class="pull-left"><i class="ti-layers"></i><span class="right-nav-text">Multi
                                    level Menu</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="multi-level" class="collapse" data-parent="#sidebarnav">
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#auth">Level
                                    item 1<div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="auth" class="collapse">
                                    <li>
                                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#login">Level
                                            item 1.1<div class="pull-right"><i class="ti-plus"></i></div>
                                            <div class="clearfix"></div>
                                        </a>
                                        <ul id="login" class="collapse">
                                            <li>
                                                <a href="javascript:void(0);" data-toggle="collapse"
                                                    data-target="#invoice">level item 1.1.1<div class="pull-right"><i
                                                            class="ti-plus"></i></div>
                                                    <div class="clearfix"></div>
                                                </a>
                                                <ul id="invoice" class="collapse">
                                                    <li> <a href="#">level item 1.1.1.1</a> </li>
                                                    <li> <a href="#">level item 1.1.1.2</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="#">level item 1.2</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="collapse" data-target="#error">level
                                    item 2<div class="pull-right"><i class="ti-plus"></i></div>
                                    <div class="clearfix"></div>
                                </a>
                                <ul id="error" class="collapse">
                                    <li> <a href="#">level item 2.1</a> </li>
                                    <li> <a href="#">level item 2.2</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        @endcan
        <!-- Left Sidebar End-->

        <!--=================================
