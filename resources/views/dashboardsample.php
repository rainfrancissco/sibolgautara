<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="{{ asset ('assets/img/favicon.html') }}">

    <title>DashLab 2</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--icon font-->
    <link href="{{ asset ('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/dashlab-icon/dashlab-icon.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/themify-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/weather-icons/css/weather-icons.min.css') }}" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="{{ asset ('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="{{ asset ('assets/vendor/jquery-dropdown-master/jquery.dropdown.css') }}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{ asset ('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{ asset ('assets/vendor/icheck/skins/all.css') }}" rel="stylesheet">

    <!--vector maps -->
    <link href="{{ asset ('assets/vendor/vector-map/jquery-jvectormap-1.1.1.css') }}" rel="stylesheet" >

    <!--custom styles-->
    <link href="{{ asset ('assets/css/main.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset ('assets/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset ('assets/vendor/respond.min.js') }}"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115474794-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115474794-1');
    </script>

</head>


<body class="fixed-nav top-nav">

    <!--header-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
        <div class="box-container">
           <!--brand name for responsive-->
           <a class="navbar-brand navbar-brand-responsive" href="#">
               <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="{{ asset ('assets/img/logo-icon@2x.png') }} 2x"  alt=""/>
               <div class="float-left">
                   <div>DashLab</div>
                <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>UI element</span>
                </span>
               </div>
           </a>
           <!--/brand name for responsive-->

            <!--responsive navigation list toggle-->
            <button class="navbar-toggler navigation-list-toggler" type="button" data-toggle="collapse" data-target="#navbarListResponsive" aria-controls="navbarListResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--/responsive navigation list toggle-->

            <!--responsive nav notification toggle-->
            <button class="navbar-toggler nav-notification-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span> <i class="vl_ellipsis-fill-v f16"></i></span>
            </button>
            <!--/responsive nav notification toggle-->

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <!--brand name-->
                <a class="navbar-brand navbar-hide-responsive" href="#">
                    <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
                    <div class="float-left">
                        <div>DashLab</div>
                        <span class="page-direction f12 weight300">
                            <span>home</span>
                            <i class="fa fa-angle-right"></i>
                            <span>UI element</span>
                        </span>
                    </div>
                </a>
                <!--/brand name-->

                <!--header rightside links-->
                <ul class="navbar-nav header-links ml-auto hide-arrow">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="vl_chat-bubble"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">9 New</span>
                            </span>
                            <div class="notification-alarm">
                                <span class="wave wave-danger"></span>
                                <span class="dot"></span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header weight500 ">Messages</h6>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item border-bottom msg-unread" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                                </div>
                                <span class="weight500">Andrew Flinton</span>
                                <span class="small float-right text-muted">08:30 AM</span>

                                <div class="dropdown-message">
                                    I hope that you will be there in time. See you then
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom msg-unread" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                                </div>
                                <span class="weight500">John Doe</span>
                                <span class="small float-right text-muted">10:28 AM</span>

                                <div class="dropdown-message">
                                    Hello this is an example message. Just want to show how it looks
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                                </div>
                                <span class="weight500">Dash Don</span>
                                <span class="small float-right text-muted">07:12 PM</span>

                                <div class="dropdown-message">
                                    Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                                </div>
                                <span class="weight500">dkmosa</span>
                                <span class="small float-right text-muted">12:10 PM</span>

                                <div class="dropdown-message">
                                    We build a beautiful dashboard admin panel for professional
                                </div>
                            </a>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="vl_bell"></i>
                            <span class="d-lg-none">Notification
                                <span class="badge badge-pill badge-warning">5 New</span>
                            </span>
                            <div class="notification-alarm">
                                <span class="wave wave-warning"></span>
                                <span class="dot bg-warning"></span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header weight500">Notification</h6>

                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item border-bottom" href="#">
                                <span class="text-primary">
                                <span class="weight500">
                                    <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                                </span>
                                <span class="small float-right text-muted">03:14 AM</span>

                                <div class="dropdown-message f12">
                                    This week project update report generated. All team members are requested to check the updates
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <span class="text-danger">
                                <span class="weight500">
                                    <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                                </span>
                                <span class="small float-right text-muted">10:34 AM</span>

                                <div class="dropdown-message f12">
                                    Unexpectedly server response stop. Responsible members are requested to fix it soon
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <span class="text-success">
                                <span class="weight500">
                                    <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                                </span>
                                <span class="small float-right text-muted">12:30 AM</span>

                                <div class="dropdown-message f12">
                                    Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                                </div>
                            </a>

                            <a class="dropdown-item small" href="#">View all notification</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb">
                                <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="#">Account Settings</a>
                            <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                            <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login.html">Sign Out</a>
                        </div>
                    </li>
                </ul>
                <!--/header rightside links-->
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="box-container">
            <div class="collapse navbar-collapse" id="navbarListResponsive">
                <!--header nav links-->
                <ul class="navbar-nav header-links">
                    <li class="nav-item active">
                        <a class="nav-link mr-lg-3" href="index.html">

                        </a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="dashNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dashboard
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dashNav">
                            <a class="dropdown-item" href="index.html">Dashboard 1</a>
                            <a class="dropdown-item active" href="dashboard-2.html">Dashboard 2</a>
                            <a class="dropdown-item" href="dashboard-3.html">Dashboard 3</a>
                            <a class="dropdown-item" href="dashboard-4.html">Dashboard 4</a>
                            <a class="dropdown-item" href="dashboard-5.html">Dashboard 5</a>
                            <a class="dropdown-item" href="dashboard-6.html">Dashboard 6</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Features
                        </a>
                        <div class="dropdown-menu" aria-labelledby="actionNav">
                            <a class="dropdown-item" href="#">Bootstrap 4 Stable</a>
                            <a class="dropdown-item" href="#">DashLab Modern Admin</a>
                            <a class="dropdown-item" href="#">Awesome Widgets Collection</a>
                            <a class="dropdown-item" href="#">Developer Friendly Code</a>
                            <a class="dropdown-item" href="#">SASS and GULP Task</a>
                            <a class="dropdown-item" href="#">Fully Responsive</a>
                            <a class="dropdown-item" href="#">Latest Version Plugins</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="reportNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reports
                        </a>
                        <div class="dropdown-menu" aria-labelledby="reportNav">
                            <a class="dropdown-item" href="#">Daily Reports</a>
                            <a class="dropdown-item" href="#">Weekly Reports</a>
                            <a class="dropdown-item" href="#">Monthly Reports</a>
                            <a class="dropdown-item" href="#">Yearly Reports</a>
                            <a class="dropdown-item" href="#">HR Reports</a>
                            <a class="dropdown-item" href="#">Product Reports</a>
                            <a class="dropdown-item" href="#">Order Reports</a>
                            <a class="dropdown-item" href="#">Revenue Reports</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="orderNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Management
                        </a>
                        <div class="dropdown-menu" aria-labelledby="orderNav">
                            <a class="dropdown-item" href="#">HR Management</a>
                            <a class="dropdown-item" href="#">Product Management</a>
                            <a class="dropdown-item" href="#">Role Management</a>
                            <a class="dropdown-item" href="#">Sales Management</a>
                            <a class="dropdown-item" href="#">Employee Management</a>
                        </div>
                    </li>
                </ul>
                <!--/header nav links-->
                <!--header search-->
                <ul class="navbar-nav header-links ml-auto">
                    <li class="nav-item">
                        <form class="search-wrap">
                            <input type="text" class="form-control form-pill search-input" placeholder="Search"/>
                            <i class="fa fa-search"></i>
                        </form>
                    </li>
                </ul>
                <!--/header search-->
            </div>
        </div>
    </nav>
    <!--/header-->




    <!--main content wrapper-->
    <div class="content-wrapper">

        <!--creative states-->
        <div class="creative-state-area bg-white">
            <div class="box-container">
                <div class="row pt-xl-4">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="creative-state-icon bg-danger text-center pull-left mt-4">
                            <i class="vl_clip-board"></i>
                        </div>
                        <div class="creative-state-info text-center pull-left state-shadow">
                            <h3 class="mt-4">9808</h3>
                            <p class="mb-1">order received</p>
                            <div class=" widget-action-link ">
                                <small class="text-danger weight700">5% <i class="fa fa-long-arrow-down"></i></small>
                            </div>

                            <div class="px-3 pb-3">
                                <canvas id="state_order_chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="creative-state-icon bg-warning text-center pull-left mt-4">
                            <i class="vl_cart-full"></i>
                        </div>
                        <div class="creative-state-info text-center pull-left state-shadow">
                            <h3 class="mt-4">1231</h3>
                            <p class="mb-1">total sales</p>
                            <div class=" widget-action-link">
                                <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                            </div>
                            <div class="px-3 pb-3">
                                <canvas id="state_sale_chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="creative-state-icon bg-purple text-center pull-left mt-4">
                            <i class="vl_dollar-on-hand"></i>
                        </div>
                        <div class="creative-state-info text-center pull-left state-shadow">
                            <h3 class="mt-4">23214</h3>
                            <p class="mb-1">total profit</p>
                            <div class=" widget-action-link">
                                <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                            </div>
                            <div class="px-3 pb-3">
                                <canvas id="state_profit_chart" height="80"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/creative states-->
        <div class="box-container">
            <div class="container-fluid">

                <!--sales statistical overview-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-info">
                                    <div class="custom-title">Sales Statistical Overview</div>
                                    <div class=" widget-action-link">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                                <i class=" vl_ellipsis-fill-h"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                                <a class="dropdown-item" href="#"> Edit</a>
                                                <a class="dropdown-item" href="#"> Delete</a>
                                                <a class="dropdown-item" href="#"> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3">
                                        <span class="text-muted mb-5 d-inline-block"><i class="fa fa-bolt"></i> Page Views</span>
                                        <h1 class="mb-0">135,870</h1>
                                        <small class="text-muted">Page views in last month december 2018</small>
                                        <ul class="list-unstyled mt-5">
                                            <li class="text-muted">
                                                <i class="fa fa-clock-o pr-2"></i> Data from January
                                            </li>
                                            <li class="text-muted">
                                                <i class="fa fa-clock-o pr-2"></i>  Last active in 12.01.2018
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-9">
                                        <canvas id="sales_overview_chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--/sales statistical overview-->

                <!--member performance & support ticket-->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card card-shadow mb-4 ">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-danger">
                                    <div class="custom-title">
                                        Member's Performance
                                        <a href="javascript:;" class="btn-ordering btn-primary float-right ml-2">
                                            <i class="fa fa-sort-alpha-asc"></i>
                                        </a>
                                        <ul class="nav nav-pills nav-pill-turquoise nav-pill-custom nav-pills-sm float-right " id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-today-tab" data-toggle="pill" href="#pills-today" role="tab" aria-controls="pills-today" aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-month-tab" data-toggle="pill" href="#pills-month" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                        <ul class="list-unstyled mb-0 list-widget">
                                            <li>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                            <span class="text-muted">Sales Executive, NY</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">james alexender</h6>
                                                            <span class="text-muted">Sales Executive, FL</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                            <span class="text-muted">Sales Executive, CA</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="media mb-3">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                            <span class="text-muted">Sales Executive, MI</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li class="text-center">
                                                <a href="javascript:;" class=" more-list">
                                                    <i class=" vl_ellipsis-fill-h"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                        <ul class="list-unstyled mb-0 list-widget">
                                            <li>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">james alexender</h6>
                                                            <span class="text-muted">Sales Executive, FL</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$480.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="media mb-3">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">jonna pinedda</h6>
                                                            <span class="text-muted">Sales Executive, MI</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$180.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">ursula sitorus</h6>
                                                            <span class="text-muted">Sales Executive, CA</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$360.00 <i class="fa fa-level-down text-danger pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="media mb-4">
                                                    <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=" ">
                                                    <div class="media-body list-widget-border">
                                                        <div class="float-left">
                                                            <h6 class="text-uppercase mb-0">shirley hoe</h6>
                                                            <span class="text-muted">Sales Executive, NY</span>
                                                        </div>
                                                        <div class=" float-right">
                                                            <strong>$780.00 <i class="fa fa-level-up text-success pl-2"></i></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                            </li>
                                            <li class="text-center">
                                                <a href="javascript:;" class=" more-list">
                                                    <i class="vl_ellipsis-fill-h"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card card-shadow mb-4 ">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-warning">
                                    <div class="custom-title">Support Tickets</div>
                                    <div class=" widget-action-link">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                                Filter <i class="fa fa-caret-down pl-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                                <a class="dropdown-item" href="#"> Edit</a>
                                                <a class="dropdown-item" href="#"> Delete</a>
                                                <a class="dropdown-item" href="#"> Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0 list-widget">
                                    <li>
                                        <div class="media mb-4">
                                            <div class="mr-3 rounded-circle bg-turquoise st-alphabet">
                                                J
                                                <span class="status bg-success"></span>
                                            </div>
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">Joseph Farnandez <span class="text-warning pl-3">pending</span></h6>
                                                    <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                                                </div>
                                                <div class=" float-right">
                                                    <small class="text-muted">8:40 PM</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-4">
                                            <div class="mr-3 rounded-circle bg-purple st-alphabet">
                                                M
                                                <span class="status bg-secondary"></span>
                                            </div>
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">martin anderson  <span class="text-success pl-3">open</span></h6>
                                                    <span class="text-muted">I have some query regarding the license issue.</span>
                                                </div>
                                                <div class=" float-right">
                                                    <small class="text-muted">1 Day Ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-4">
                                            <div class="mr-3 rounded-circle bg-primary st-alphabet">
                                                L
                                                <span class="status bg-warning"></span>
                                            </div>
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">libson james <span class="text-secondary pl-3">closed</span></h6>
                                                    <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                                </div>
                                                <div class=" float-right">
                                                    <small class="text-muted">2 Days Ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="media mb-3">
                                            <div class="mr-3 rounded-circle bg-pink st-alphabet">
                                                A
                                                <span class="status bg-success"></span>
                                            </div>
                                            <div class="media-body list-widget-border">
                                                <div class="float-left">
                                                    <h6 class="text-uppercase mb-0">alex voxy <span class="text-warning pl-3">open</span></h6>
                                                    <span class="text-muted">My client site is broken in most of the windows browser</span>
                                                </div>
                                                <div class=" float-right">
                                                    <small class="text-muted">4 Days Ago</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    <li class="text-center">
                                        <a href="javascript:;" class=" more-list">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/member performance & support ticket-->

                <!--issue fixing & profile info-->
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-danger">
                                    <div class="custom-title">
                                        Issue Fixing
                                        <ul class="nav nav-pills nav-pill-primary nav-pill-custom nav-pills-sm float-right " id="pills-tab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-today-tab2" data-toggle="pill" href="#pills-weekly2" role="tab" aria-selected="true">Weekly</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-month-tab2" data-toggle="pill" href="#pills-month2" role="tab" aria-selected="false">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="custom-post-title">Graphical view of this week issue solving status</div>
                                </div>
                            </div>
                            <div class="card-body pt-5 pb-4">
                                <div class="tab-content" id="pills-tabContent2">
                                    <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel" aria-labelledby="pills-today-tab">
                                        <div class="row">
                                            <div class="col-12 col-xl-7 col-md-6 text-center">
                                                <canvas id="doughnut_chart" class="mb-4" ></canvas>
                                                <small class="text-muted">Realtime data update instantly</small>
                                            </div>
                                            <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                                <ul class="list-unstyled f12">
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 40%
                                                        <span class="float-right">Solved</span>
                                                    </li>
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 10%
                                                        <span class="float-right">Pending</span>
                                                    </li>
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 10%
                                                        <span class="float-right">Declain</span>
                                                    </li>
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 40%
                                                        <span class="float-right">Reopen</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-month2" role="tabpanel" aria-labelledby="pills-month-tab">
                                        <div class="row">
                                            <div class="col-12 col-xl-7 col-md-6 text-center">
                                                <canvas id="doughnut_chart2" class="mb-4"></canvas>
                                                <small class="text-muted">Realtime data update instantly</small>
                                            </div>
                                            <div class="col-12 col-xl-4 col-md-6 text-muted mt-xl-4">
                                                <ul class="list-unstyled f12">
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2" style="color: #cae59b"></i> 30%
                                                        <span class="float-right">Solved</span>
                                                    </li>
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2" style="color: #fcdd82"></i> 20%
                                                        <span class="float-right">Pending</span>
                                                    </li>
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2 " style="color: #f79490"></i> 25%
                                                        <span class="float-right">Declain</span>
                                                    </li>
                                                    <li class="list-widget-border mb-3 pb-3">
                                                        <i class="fa fa-circle pr-2 " style="color: #acf5fe"></i> 25%
                                                        <span class="float-right">Reopen</span>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-body">
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <strong>405</strong>
                                    <span class="text-muted">Following</span>
                                    <span class="pl-2 pr-2 text-muted weight800">.</span>
                                    <strong>1690</strong>
                                    <span class="text-muted">Follower</span>
                                </div>

                                <div class="text-center">
                                    <div class="mt-4 mb-3">
                                        <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                                    </div>
                                    <h5 class="text-uppercase mb-0">Jane Doe</h5>
                                    <p class="text-muted mb-0">Sr. Marketing Executive </p>
                                    <div class="rattings mb-4">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star-o text-warning"></i>
                                    </div>
                                    <div class="badge-icon mb-4">
                                        <img src="assets/img/badge/level.svg" width="50" alt="Level" data-toggle="tooltip" data-placement="top" title="Level 5"/>
                                        <img src="assets/img/badge/status.svg" width="50" alt="Status" data-toggle="tooltip" data-placement="top" title="Status"/>
                                        <img src="assets/img/badge/disable.svg" width="50" alt="Disable" data-toggle="tooltip" data-placement="top" title="Disable"/>
                                        <img src="assets/img/badge/trendy.svg" width="50" alt="Trendy" data-toggle="tooltip" data-placement="top" title="Trendy"/>
                                        <img src="assets/img/badge/monthly-top-seller.svg" width="50" alt="Monthly Top Seller" data-toggle="tooltip" data-placement="top" title="Monthly Top Seller"/>
                                    </div>
                                    <div class="mb-2">
                                        <a href="#" class="btn btn-sm btn-pill btn-primary pl-4 pr-4">Follow</a>
                                        <a href="#" class="btn btn-sm btn-pill btn-purple  pl-4 pr-4">Message</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--/issue fixing & profile info-->

                <!--employee data table-->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card card-shadow mb-4 ">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-warning">
                                    <div class="custom-title">Employee Data Table</div>
                                    <div class=" widget-action-link">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                                Action <i class="fa fa-caret-down pl-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                                <a class="dropdown-item" href="#"> Move to another group</a>
                                                <a class="dropdown-item" href="#"> Delete</a>
                                                <a class="dropdown-item" href="#"> Edit</a>
                                                <a class="dropdown-item" href="#"> Send Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover table-custom">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Last Contact</th>
                                            <th scope="col">Next Task</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox my-1 mr-sm-2 float-left">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                    <label class="custom-control-label" for="customControlInline"> </label>
                                                </div>
                                                <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar1.jpg" alt=""/>Jhony Depp
                                            </td>
                                            <td>(715) 777-666</td>
                                            <td>jhony@example.com</td>
                                            <td>Lead</td>
                                            <td>5 min ago</td>
                                            <td><span class="badge badge-info form-pill px-3 py-1">CALL</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox my-1 mr-sm-2 float-left">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline1">
                                                    <label class="custom-control-label" for="customControlInline1"> </label>
                                                </div>
                                                <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar2.jpg" alt=""/>Robert De Niro
                                            </td>
                                            <td>(715) 777-666</td>
                                            <td>robert-de@example.com</td>
                                            <td>Lead</td>
                                            <td>5 min ago</td>
                                            <td><span class="badge badge-success form-pill px-3 py-1">OPENING</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox my-1 mr-sm-2 float-left">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline2">
                                                    <label class="custom-control-label" for="customControlInline2"> </label>
                                                </div>
                                                <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar3.jpg" alt=""/>Dr Dkmosa
                                            </td>
                                            <td>(715) 777-666</td>
                                            <td>dkmosa@example.com</td>
                                            <td>Lead</td>
                                            <td>5 min ago</td>
                                            <td><span class="badge badge-primary form-pill px-3 py-1">FOLLOW UP</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox my-1 mr-sm-2 float-left">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline3">
                                                    <label class="custom-control-label" for="customControlInline3"> </label>
                                                </div>
                                                <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar4.jpg" alt=""/> Tasi Saz
                                            </td>
                                            <td>(715) 777-666</td>
                                            <td>tasi@example.com</td>
                                            <td>Lead</td>
                                            <td>5 min ago</td>
                                            <td><span class="badge badge-danger form-pill px-3 py-1">VISIT</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox my-1 mr-sm-2 float-left">
                                                    <input type="checkbox" class="custom-control-input" id="customControlInline4">
                                                    <label class="custom-control-label" for="customControlInline4"> </label>
                                                </div>
                                                <img class="rounded-circle mr-3 table-thumb" src="assets/img/avatar/avatar-mini1.jpg" alt=""/>Olivia Dias
                                            </td>
                                            <td>(715) 777-666</td>
                                            <td>olivia@example.com</td>
                                            <td>Lead</td>
                                            <td>5 min ago</td>
                                            <td><span class="badge badge-warning text-light form-pill px-3 py-1">CAMPAIGN</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/employee data table-->

                <!--notification & regional sales-->
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header">
                                <div class="custom-title-wrap bar-danger">
                                    <div class="custom-title">Notification</div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-unstyled mb-0 list-widget notification-widget">
                                    <li class="list-widget-border pl-4 pr-4 pt-2 pb-2">
                                        <div class="media d-flex align-items-center">
                                            <div class="mr-3 rounded-circle bg-purple-light st-alphabet">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="media-body ">
                                                <p class="mb-0"><a href="#" class="text-purple-light">John Doe</a> send you a mail</p>
                                                <span class="text-muted">4 min ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-widget-border pl-4 pr-4 pt-2 pb-2">
                                        <div class="media d-flex align-items-center">
                                            <img class="mr-3 rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=" ">
                                            <div class="media-body ">
                                                <p class="mb-0"><a href="#" class="text-danger">Jim Doe</a> mentioned you in a sales annual report</p>
                                                <span class="text-muted">6 hours ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-widget-border pl-4 pr-4 pt-2 pb-2">
                                        <div class="media d-flex align-items-center">
                                            <div class="mr-3 rounded-circle bg-success st-alphabet">
                                                <i class="fa fa-comments-o"></i>
                                            </div>
                                            <div class="media-body ">
                                                <p class="mb-0">You have 12 messages still unread</p>
                                                <span class="text-muted">1 day ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-widget-border pl-4 pr-4 pt-2 pb-2">
                                        <div class="media d-flex align-items-center">
                                            <div class="mr-3 rounded-circle bg-warning st-alphabet">
                                                <i class="fa fa-warning"></i>
                                            </div>
                                            <div class="media-body ">
                                                <p class="mb-0">Database Server has reached its daily capacity</p>
                                                <span class="text-muted">5 days ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-widget-border pl-4 pr-4 pt-2 pb-2">
                                        <div class="media d-flex align-items-center">
                                            <div class="mr-3 rounded-circle bg-primary st-alphabet">
                                                <i class="fa fa-bell"></i>
                                            </div>
                                            <div class="media-body ">
                                                <p class="mb-0"><a href="#" class="text-primary">John Doe</a> send you a mail</p>
                                                <span class="text-muted">4 min ago</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="text-center p-3">
                                        <a href="javascript:;" class="more-list">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-shadow mb-4">
                            <div class="card-header border-0">
                                <div class="custom-title-wrap bar-warning">
                                    <div class="custom-title">Regional Sales</div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div id="usa_map" style="height: 200px"></div>

                                <div class="mb-3">
                                    <div class="progress-title">
                                        <span>Washington</span>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="progress-title">
                                        <span>California </span>
                                        <span class="float-right">55%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple-light" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="progress-title">
                                        <span>Texas</span>
                                        <span class="float-right">35%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/notification & regional sales-->

            </div>
        </div>
    </div>
    <!--/main content wrapper-->

    <!--footer-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright &copy; VectorLab 2018</small>
            </div>
        </div>
    </footer>
    <!--/footer-->

    <!--basic scripts-->
    <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/jquery-dropdown-master/jquery.dropdown.js') }}"></script>
    <script src="{{ asset ('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/icheck/skins/icheck.min.js') }}"></script>

    <!--chartjs-->
    <script src="{{ asset ('assets/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <!--chartjs initialization-->
    <script src="{{ asset ('assets/vendor/js-init/chartjs/init-creative-state-chart.js') }}"></script>
    <script src="{{ asset ('assets/vendor/js-init/chartjs/init-doughnut-chart.js') }} "></script>
    <script src="{{ asset ('assets/vendor/js-init/chartjs/init-doughnut-chart2.js') }}"></script>
    <script src="{{ asset ('assets/vendor/js-init/chartjs/init-sales-overview-chart.js') }}"></script>

    <!--vectormap-->
    <script src="{{ asset ('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/vector-map/jquery-jvectormap-us-aea.js') }}"></script>
    <!--vectormap initialization-->
    <script src="{{ asset ('assets/vendor/js-init/vmap/init-vmap-usa.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="{{ asset ('assets/js/scripts.js') }}"></script>
</body>

</html>
