<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Material Admin - Dashboard</title>

        <!-- BEGIN META -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="your,keywords">
        <meta name="description" content="Short explanation about this website">
        <!-- END META -->

        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/bootstrap.css?1422792965')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/materialadmin.css?1425466319')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/font-awesome.min.css?1422529194')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/material-design-iconic-font.min.css?1421434286')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/libs/rickshaw/rickshaw.css?1422792967')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('assets/css/theme-default/libs/morris/morris.core.css?1420463396')}}" />
        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type="text/javascript" src="{{asset('assets/js/libs/utils/html5shiv.js?1403934957')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/libs/utils/respond.min.js?1403934956')}}"></script>
        <![endif]-->
    </head>
    <body class="menubar-hoverable header-fixed ">

        <!-- BEGIN HEADER-->
        <header id="header" >
            <div class="headerbar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="headerbar-left">
                    <ul class="header-nav header-nav-options">
                        <li class="header-nav-brand" >
                            <div class="brand-holder">
                                <a href="{{asset('html/dashboards/dashboard.html')}}">
                                    <span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="headerbar-right">
                    <ul class="header-nav header-nav-options">
                        <li>
                            <!-- Search form -->
                        
                        </li>
                        <li class="dropdown hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                                <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
                            </a>
                            
                        </li><!--end .dropdown -->
                        <li class="dropdown hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                                <i class="fa fa-area-chart"></i>
                            </a>
                            <ul class="dropdown-menu animation-expand">
                                <li class="dropdown-header">Server load</li>
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Today</strong></span>
                                            <strong class="pull-right">93%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                                    </a>
                                </li><!--end .dropdown-progress -->
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Yesterday</strong></span>
                                            <strong class="pull-right">30%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                                    </a>
                                </li><!--end .dropdown-progress -->
                                <li class="dropdown-progress">
                                    <a href="javascript:void(0);">
                                        <div class="dropdown-label">
                                            <span class="text-light">Server load <strong>Lastweek</strong></span>
                                            <strong class="pull-right">74%</strong>
                                        </div>
                                        <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                                    </a>
                                </li><!--end .dropdown-progress -->
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-options -->
                    <ul class="header-nav header-nav-profile">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                            
                                <span class="profile-info">
                                    Daniel Johnson
                                    <small>Administrator</small>
                                </span>
                            </a>
                            <ul class="dropdown-menu animation-dock">
                                <li class="dropdown-header">Config</li>
                                <li><a href="{{asset('html/pages/profile.html')}}">My profile</a></li>
                                <li><a href="{{asset('html/pages/blog/post.html')}}">My blog <span class="badge style-danger pull-right">16</span></a></li>
                                <li><a href="{{asset('html/pages/calendar.html')}}">My appointments</a></li>
                                <li class="divider"></li>
                                <li><a href="{{asset('html/pages/locked.html')}}"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
                    <ul class="header-nav header-nav-toggle">
                        <li>
                            <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                        </li>
                    </ul><!--end .header-nav-toggle -->
                </div><!--end #header-navbar-collapse -->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- BEGIN BASE-->
        <div id="base">

            <!-- BEGIN OFFCANVAS LEFT -->
            <div class="offcanvas">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->

            <!-- BEGIN CONTENT-->
            <div id="content">
                <section>
                    <div class="section-body">
                        @yield('content')
                    </div><!--end .section-body -->
                </section>
            </div><!--end #content-->
            <!-- END CONTENT -->

            <!-- BEGIN MENUBAR-->
            <div id="menubar" class="menubar-inverse ">
                <div class="menubar-fixed-panel">
                    <div>
                        <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="expanded">
                        <a href="{{URL('/')}}">
                            <span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
                        </a>
                    </div>
                </div>
                <div class="menubar-scroll-panel">

                    <!-- BEGIN MAIN MENU -->
                    <ul id="main-menu" class="gui-controls">

                        <!-- BEGIN DASHBOARD -->
                        <li>
                            <a href="{{URL('/')}}" class="active">
                                <div class="gui-icon"><i class="md md-home"></i></div>
                                <span class="title">Dashboard</span>
                            </a>
                        </li><!--end /menu-li -->
                        <!-- END DASHBOARD -->

                        <!-- BEGIN EMAIL -->
                        <li class="gui-folder">
                            <a>
                                <div class="gui-icon"><i class="md md-email"></i></div>
                                <span class="title">Catalog</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                              <li><a href="{{URL('categories')}}" ><span class="title">Categories</span></a></li>
                              <li><a href="{{URL('products')}}" ><span class="title">Products</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <!-- END EMAIL -->

                        <!-- BEGIN DASHBOARD -->
                        <li>
                            <a href="{{asset('html/layouts/builder.html')}}" >
                                <div class="gui-icon"><i class="md md-web"></i></div>
                                <span class="title">Layouts</span>
                            </a>
                        </li><!--end /menu-li -->
                        <!-- END DASHBOARD -->

                        <!-- BEGIN UI -->
                        <li class="gui-folder">
                            <a>
                                <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                                <span class="title">UI elements</span>
                            </a>
                            <!--start submenu -->
                            
                        </li><!--end /menu-li -->
                        <!-- END UI -->

                        <!-- BEGIN TABLES -->
                        
                        <!-- END TABLES -->

                        <!-- BEGIN FORMS -->
                        
                        <!-- END FORMS -->

                        <!-- BEGIN PAGES -->
                        
                        <!-- END FORMS -->

                        <!-- BEGIN CHARTS -->
                        
                        <!-- END CHARTS -->

                        <!-- BEGIN LEVELS -->
                        

                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->

                    <div class="menubar-foot-panel">
                        <small class="no-linebreak hidden-folded">
                            <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->

            <!-- BEGIN OFFCANVAS RIGHT -->
            <div class="offcanvas">

                <!-- BEGIN OFFCANVAS SEARCH -->
                <div id="offcanvas-search" class="offcanvas-pane width-8">
                    <div class="offcanvas-head">
                        <header class="text-primary">Search</header>
                        <div class="offcanvas-tools">
                            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                                <i class="md md-close"></i>
                            </a>
                        </div>
                    </div>
                    <div class="offcanvas-body no-padding">
                        
                    </div><!--end .offcanvas-body -->
                </div><!--end .offcanvas-pane -->
                <!-- END OFFCANVAS SEARCH -->

                <!-- BEGIN OFFCANVAS CHAT -->
                <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
                    <div class="offcanvas-head style-default-bright">
                        <header class="text-primary">Chat with Ann Laurens</header>
                        <div class="offcanvas-tools">
                            <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                                <i class="md md-close"></i>
                            </a>
                            <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                                <i class="md md-arrow-back"></i>
                            </a>
                        </div>
                    
                    </div>
                    <div class="offcanvas-body">
                        <ul class="list-chats">
                    
                        </ul>
                    </div><!--end .offcanvas-body -->
                </div><!--end .offcanvas-pane -->
                <!-- END OFFCANVAS CHAT -->

            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS RIGHT -->

        </div><!--end #base-->
        <!-- END BASE -->

        <!-- BEGIN JAVASCRIPT -->
        <script src="{{asset('assets/js/libs/jquery/jquery-1.11.2.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/spin.js/spin.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/autosize/jquery.autosize.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/moment/moment.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/flot/jquery.flot.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/flot/jquery.flot.orderBars.js')}}"></script>
        <script src="{{asset('assets/js/libs/flot/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('assets/js/libs/flot/curvedLines.js')}}"></script>
        <script src="{{asset('assets/js/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/nanoscroller/jquery.nanoscroller.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/d3/d3.min.js')}}"></script>
        <script src="{{asset('assets/js/libs/d3/d3.v3.js')}}"></script>
        <script src="{{asset('assets/js/libs/rickshaw/rickshaw.min.js')}}"></script>
        <script src="{{asset('assets/js/core/source/App.js')}}"></script>
        <script src="{{asset('assets/js/core/source/AppNavigation.js')}}"></script>
        <script src="{{asset('assets/js/core/source/AppOffcanvas.js')}}"></script>
        <script src="{{asset('assets/js/core/source/AppCard.js')}}"></script>
        <script src="{{asset('assets/js/core/source/AppForm.js')}}"></script>
        <script src="{{asset('assets/js/core/source/AppNavSearch.js')}}"></script>
        <script src="{{asset('assets/js/core/source/AppVendor.js')}}"></script>
        <script src="{{asset('assets/js/core/demo/Demo.js')}}"></script>
        <script src="{{asset('assets/js/core/demo/DemoDashboard.js')}}"></script>
        <!-- END JAVASCRIPT -->

    </body>
</html>
