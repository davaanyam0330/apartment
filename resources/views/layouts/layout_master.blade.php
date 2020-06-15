    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <title>Зэвсэгт хүчний Жанжин штаб</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="Themesbrand" name="author" />
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <!-- App favicon -->
             <link rel="shortcut icon" href="{{url("public/images/gsmaf_logo_ico.ico")}}">



            <!-- App css -->
            <link href="{{url("public/apartmrntJsCss/css/bootstrap-dark.min.css")}}" id="bootstrap-dark" rel="stylesheet" type="text/css" />
            <link href="{{url("public/apartmrntJsCss/css/bootstrap.min.css")}}" id="bootstrap-light" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="{{url("/public/apartmrntJsCss/css/icons.min.css")}}">
            <link href="{{url("public/apartmrntJsCss/css/app-rtl.min.css")}}" id="app-rtl" rel="stylesheet" type="text/css" disbaled="" />
            <link href="{{url("public/apartmrntJsCss/css/app-dark.min.css")}}" id="app-dark" rel="stylesheet" type="text/css" />
            <link href="{{url("public/apartmrntJsCss/css/app.min.css")}}" id="app-light" rel="stylesheet" type="text/css" />

            <!--Zagvarlag alert-->
            <link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.core.css') }}" />
            <link rel="stylesheet" href="{{ asset('public/z-alert/css/alertify.default.css') }}" />
            <script src="{{ asset('public/z-alert/js/alertify.min.js') }}"></script>
            <!--Zagvarlag alert-->


            {{-- START Image show css section  --}}
            <link href="{{url("/public/imageShowTool/photo-show-style.css")}}" type="text/css" rel="stylesheet" />
            {{-- END Image show css section  --}}


            @yield('css')

          </head>



        <body data-sidebar="dark">
                <div id="preloader">
            <div id="status">
                <div class="spinner-chase">
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                    <div class="chase-dot"></div>
                </div>
            </div>
        </div>
              <!-- Begin page -->
              <div id="layout-wrapper">
                <header id="page-topbar">
                    <div class="navbar-header">
                        <div class="d-flex">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <a href="index" class="logo logo-dark">
                                    <span class="logo-sm">
                                      <img src="{{url("public/assets/images/logo.svg")}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{url("public/assets/images/logo-dark.png")}}" alt="" height="30">
                                    </span>
                                </a>

                                <a href="index" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="{{url("public/assets/images/logo-sm.png")}}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="{{url("public/assets/images/logo-light.png")}}" alt="" height="30">
                                    </span>
                                </a>
                            </div>

                            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                                <i class="mdi mdi-menu"></i>
                            </button>

                            <div class="d-none d-sm-block">
                                <div class="dropdown pt-3 d-inline-block">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Create <i class="mdi mdi-chevron-down"></i>
                                        </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex">
                              <!-- App Search-->
                            <div class="dropdown d-none d-lg-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                    <i class="mdi mdi-fullscreen"></i>
                                </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-danger badge-pill">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="m-0 font-size-16"> Notifications (258) </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">New Message received</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">You have 87 unread messages</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                                        <i class="mdi mdi-glass-cocktail"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">It is a long established fact that a reader will</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Your order is placed</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs mr-3">
                                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">New Message received</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1">You have 87 unread messages</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top">
                                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle header-profile-user" src="{{url("public/assets/images/users/user-4.jpg")}}"
                                        alt="Header Avatar">
                                </button>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profile</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> My Wallet</a>
                                    <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Settings</a>
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Lock screen</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="ntob89TieMptUFN2YxrS8gX6Xl84gIG0MVFebsoQ">                                </form>
                                </div>
                            </div>
                            <div class="d-inline-block">
                              <button type="button" disabled class="btn header-item waves-effect">
                                  <h4>{{ Auth::user()->name }}</h4>
                              </button>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                    <i class="mdi mdi-settings-outline"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                </header>            <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Main</li>

                <li>
                    <a href="index" class="waves-effect">
                        <i class="ti-home"></i><span class="badge badge-pill badge-primary float-right">2</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="calendar" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-email"></i>
                        <span>Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox">Inbox</a></li>
                        <li><a href="email-read">Email Read</a></li>
                        <li><a href="email-compose">Email Compose</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url("angi/show")}}" class=" waves-effect">
                        <i class="ti-calendar"></i>
                        <span>Анги</span>
                    </a>
                </li>

                <li class="menu-title">Components</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-package"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts">Alerts</a></li>
                        <li><a href="ui-buttons">Buttons</a></li>
                        <li><a href="ui-cards">Cards</a></li>
                        <li><a href="ui-carousel">Carousel</a></li>
                        <li><a href="ui-dropdowns">Dropdowns</a></li>
                        <li><a href="ui-grid">Grid</a></li>
                        <li><a href="ui-images">Images</a></li>
                        <li><a href="ui-lightbox">Lightbox</a></li>
                        <li><a href="ui-modals">Modals</a></li>
                        <li><a href="ui-rangeslider">Range Slider</a></li>
                        <li><a href="ui-session-timeout">Session Timeout</a></li>
                        <li><a href="ui-progressbars">Progress Bars</a></li>
                        <li><a href="ui-sweet-alert">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions">Tabs &amp; Accordions</a></li>
                        <li><a href="ui-typography">Typography</a></li>
                        <li><a href="ui-video">Video</a></li>
                        <li><a href="ui-general">General</a></li>
                        <li><a href="ui-colors">Colors</a></li>
                        <li><a href="ui-rating">Rating</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-receipt"></i>
                        <span class="badge badge-pill badge-success float-right">6</span>
                        <span>Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements">Form Elements</a></li>
                        <li><a href="form-validation">Form Validation</a></li>
                        <li><a href="form-advanced">Form Advanced</a></li>
                        <li><a href="form-editors">Form Editors</a></li>
                        <li><a href="form-uploads">Form File Upload</a></li>
                        <li><a href="form-xeditable">Form Xeditable</a></li>
                        <li><a href="form-repeater">Form Repeater</a></li>
                        <li><a href="form-wizard">Form Wizard</a></li>
                        <li><a href="form-mask">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-morris">Morris Chart</a></li>
                        <li><a href="charts-chartist">Chartist Chart</a></li>
                        <li><a href="charts-chartjs">Chartjs Chart</a></li>
                        <li><a href="charts-flot">Flot Chart</a></li>
                        <li><a href="charts-knob">Jquery Knob Chart</a></li>
                        <li><a href="charts-sparkline">Sparkline Chart</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-view-grid"></i>
                        <span>Tables</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic">Basic Tables</a></li>
                        <li><a href="tables-datatable">Data Table</a></li>
                        <li><a href="tables-responsive">Responsive Table</a></li>
                        <li><a href="tables-editable">Editable Table</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-face-smile"></i>
                        <span>Icons</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-material">Material Design</a></li>
                        <li><a href="icons-fontawesome">Font Awesome</a></li>
                        <li><a href="icons-ion">Ion Icons</a></li>
                        <li><a href="icons-themify">Themify Icons</a></li>
                        <li><a href="icons-dripicons">Dripicons</a></li>
                        <li><a href="icons-typicons">Typicons Icons</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="ti-location-pin"></i>
                        <span class="badge badge-pill badge-danger float-right">2</span>
                        <span>Maps</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google"> Google Map</a></li>
                        <li><a href="maps-vector"> Vector Map</a></li>
                    </ul>
                </li>

                <li class="menu-title">Extras</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-layout"></i>
                        <span> Layouts </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal">Horizontal</a></li>
                        <li><a href="layouts-compact-sidebar">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed">Boxed Layout</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-archive"></i>
                        <span> Authentication </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-login">Login 1</a></li>
                        <li><a href="pages-login-2">Login 2</a></li>
                        <li><a href="pages-register">Register 1</a></li>
                        <li><a href="pages-register-2">Register 2</a></li>
                        <li><a href="pages-recoverpw">Recover Password 1</a></li>
                        <li><a href="pages-recoverpw-2">Recover Password 2</a></li>
                        <li><a href="pages-lock-screen">Lock Screen 1</a></li>
                        <li><a href="pages-lock-screen-2">Lock Screen 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-support"></i>
                        <span>  Extra Pages  </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-timeline">Timeline</a></li>
                        <li><a href="pages-invoice">Invoice</a></li>
                        <li><a href="pages-directory">Directory</a></li>
                        <li><a href="pages-blank">Blank Page</a></li>
                        <li><a href="pages-404">Error 404</a></li>
                        <li><a href="pages-500">Error 500</a></li>
                        <li><a href="pages-pricing">Pricing</a></li>
                        <li><a href="pages-gallery">Gallery</a></li>
                        <li><a href="pages-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon">Coming Soon</a></li>
                        <li><a href="pages-faq">FAQs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-bookmark-alt"></i>
                        <span>  Email Templates  </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-template-basic">Basic Action Email</a></li>
                        <li><a href="email-template-Alert">Alert Email</a></li>
                        <li><a href="email-template-Billing">Billing Email</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ti-more"></i>
                        <span>Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Level 2.1</a></li>
                                <li><a href="javascript: void(0);">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
    </div>
    <!-- Left Sidebar End -->            <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                                @yield("content")

                          <!-- start page title -->

                            <!-- end page title -->


                            <!-- end row -->

                            </div>
                            <!-- end row -->

                            <div class="row">

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Chat</h4>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->


                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    © <script>document.write(new Date().getFullYear())</script> <span class="d-none d-sm-inline-block"> Зэвсэгт хүчний Программ хангамжын төв <i class="mdi text-danger">Лого</i></span>
                </div>
            </div>
        </div>
    </footer>            </div>
                <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <!-- Right Sidebar -->
            <div class="right-bar">
                <div data-simplebar class="h-100">
                    <div class="rightbar-title px-3 py-4">
                        <a href="javascript:void(0);" class="right-bar-toggle float-right">
                            <i class="mdi mdi-close noti-icon"></i>
                        </a>
                        <h5 class="m-0">Settings</h5>
                    </div>

                    <!-- Settings -->
                    <hr class="mt-0" />
                    <h6 class="text-center">Choose Layouts</h6>

                    <div class="p-4">
                        <div class="mb-2">
                            <img src="{{url("public/assets/images/layouts/layout-1.jpg")}}" class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                            <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                        </div>

                        <div class="mb-2">
                            <img src="{{url("public/assets/images/layouts/layout-2.jpg")}}" class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="custom-control custom-switch mb-3">
                            <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css"
                                data-appStyle="{{url("public/apartmrntJsCss/css/app-dark.min.css")}}" />
                            <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                        </div>

                        <div class="mb-2">
                            <img src="{{url("public/assets/images/layouts/layout-3.jpg")}}" class="img-fluid img-thumbnail" alt="">
                        </div>
                        <div class="custom-control custom-switch mb-5">
                            <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                            <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                        </div>

                        <a href="https://1.envato.market/grNDB" class="btn btn-primary btn-block mt-3" target="_blank"><i class="mdi mdi-cart mr-1"></i> Purchase Now</a>

                    </div>

                </div> <!-- end slimscroll-menu-->
            </div>
            <!-- /Right-bar -->    <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        {{-- <!-- JAVASCRIPT --> --}}
            <script src="{{url("public/apartmrntJsCss/js/jquery.min.js")}}"></script>
            <script src="{{url("public/apartmrntJsCss/js/bootstrap.min.js")}}"></script>
            <script src="{{url("public/apartmrntJsCss/js/metismenu.min.js")}}"></script>
            <script src="{{url("public/apartmrntJsCss/js/simplebar.min.js")}}"></script>
            <script src="{{url("public/apartmrntJsCss/js/node-waves.min.js")}}"></script>

            <script src="{{url("public/apartmrntJsCss/js/app.min.js")}}"></script>

            {{--albume start  --}}
            {{-- <script type='text/javascript' src='{{url("public/12album/unitegallery/js/jquery-11.0.min.js")}}'></script> --}}
            <script type='text/javascript' src='{{url("public/12album/unitegallery/js/unitegallery.min.js")}}'></script>
            <link rel='stylesheet' href='{{url("public/12album/unitegallery/css/unite-gallery.css")}}' type='text/css' />
            <script type='text/javascript' src='{{url("public/12album/unitegallery/themes/tiles/ug-theme-tiles.js")}}'></script>
            {{-- albume end --}}

            {{-- START image show js section --}}
            <script src="{{url("/public/imageShowTool/jquery.picEyes.js")}}"></script>
            {{-- END image show js section --}}
              @yield('js')
        </body>
    </html>
