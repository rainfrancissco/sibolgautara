<!--navigation : sidebar & header-->
<nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">

    <!--brand name-->
    <a class="navbar-brand" href="#">
        <img class="pr-3 float-left" src="<?php echo e(asset('assets/img/logo-icon.png')); ?>" alt=""/>
        <div class="float-left">
            <div>Sibolga Utara <i class="fa fa-caret-down pl-2"></i></div>
                <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>ui element</span>
                </span>
        </div>
    </a>
    <!--/brand name-->

    <!--brand mega menu-->
    <div id="jq-dropdown-1" class="jq-dropdown">
        <div class="b-mega-menu">
            <div class="card card-shadow">
                <div class="card-header p-2 pl-3">
                    <div class="navbar-brand mt-2">
                        <img class="pr-3 float-left" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
                        <div class="float-left">
                            <div>Sibolga Utara</div>
                                <span class="page-direction f12 weight300">
                                    <span>home</span>
                                    <i class="fa fa-angle-right"></i>
                                    <span>ui element</span>
                                </span>
                        </div>
                    </div>

                    <div class="widget-action-link">
                        <ul class="nav nav-tabs wal-nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-home"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="analytics-tab" data-toggle="tab" href="#analytics" role="tab" aria-controls="analytics" aria-selected="false"><i class="fa fa-desktop"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="false"><i class="fa fa-magnet"></i></a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="card-body p-0 ">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row no-gutters">
                                <div class="col-4 border-right">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-home pr-2"></i> Application</a>
                                        <a class="nav-link" id="v-pills-report-tab" data-toggle="pill" href="#v-pills-report" role="tab" aria-controls="v-pills-report" aria-selected="false"><i class="fa fa-desktop pr-2"></i> Reports</a>
                                        <a class="nav-link" id="v-pills-management-tab" data-toggle="pill" href="#v-pills-management" role="tab" aria-controls="v-pills-management" aria-selected="false"><i class="fa fa-magnet pr-2"></i>Management</a>
                                        <a class="nav-link" id="v-pills-blog-tab" data-toggle="pill" href="#v-pills-blog" role="tab" aria-controls="v-pills-blog" aria-selected="false"><i class="fa fa-comments-o pr-2"></i>Blog</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li><a href="#">Bootstrap 4 Stable</a></li>
                                                <li class="active"><a href="javascript:;">DashLab Modern Admin</a></li>
                                                <li><a href="#">Awesome Widgets Collection</a></li>
                                                <li><a href="#">Developer Friendly Code</a></li>
                                                <li><a href="#">SASS and GULP Task</a></li>
                                                <li><a href="#">Fully Responsive</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-report" role="tabpanel" aria-labelledby="v-pills-report-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li><a href="#">Daily Reports</a></li>
                                                <li><a href="javascript:;">Weekly Reports</a></li>
                                                <li class="active"><a href="#">Monthly Reports</a></li>
                                                <li><a href="#">Yearly Reports</a></li>
                                                <li><a href="#">HR Reports</a></li>
                                                <li><a href="#">Product Reports</a></li>
                                                <li><a href="#">Order Reports</a></li>
                                                <li><a href="#">Revenue Reports</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-management" role="tabpanel" aria-labelledby="v-pills-management-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li><a href="#">HR Management</a></li>
                                                <li class="active"><a href="javascript:;">Product Management</a></li>
                                                <li><a href="#">Role Management</a></li>
                                                <li><a href="#">Sales Management</a></li>
                                                <li><a href="#">Employee Management</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-blog" role="tabpanel" aria-labelledby="v-pills-blog-tab">
                                            <ul class="list-unstyled b-mega-menu-link">
                                                <li class="active"><a href="#">Educational Blog</a></li>
                                                <li> <a href="javascript:;">Technology Blog</a></li>
                                                <li><a href="#">Political Blog</a></li>
                                                <li><a href="#">Woocommerce Blog</a></li>
                                                <li><a href="#">Entertainment Blog</a></li>
                                                <li><a href="#">Newspapper Blog</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                            <div class="p-5 m-4 text-center">
                                <i class="fa fa-desktop f50 text-muted mb-4"></i>
                                <p class="mb-5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC</p>
                                <a href="#" class="btn btn-primary">Get Started</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                            <div class="p-5 m-4 text-center">
                                <i class="fa fa-magnet f50 text-muted mb-4"></i>
                                <p class="mb-5">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33</p>
                                <a href="#" class="btn btn-purple">Get Started</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/brand mega menu-->

    <!--responsive nav toggle-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--/responsive nav toggle-->

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!--left side nav-->
        <ul class="navbar-nav left-side-nav" id="accordion">

            

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <?php /* <?php if(Auth::check()): ?> */ ?>
                <?php if(Auth::check() && Auth::user()->level == 'admin'): ?>
                <a class="nav-link" href="<?php echo e(url ('kelurahan')); ?>">
                    <i class="vl_grid-even"></i>
                    <span class="nav-link-text">Kelurahan </span>
                </a>
                <?php endif; ?>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <?php if(Auth::check() && Auth::user()->level == 'admin'): ?>
                <a class="nav-link" href="<?php echo e(url ('user')); ?>">
                    <i class="vl_calendar"></i>
                    <span class="nav-link-text">User Management </span>
                </a>
                <?php endif; ?>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <?php if(Auth::check()): ?>
                <a class="nav-link" href="<?php echo e(url ('warga')); ?>">
                    <i class="vl_form"></i>
                    <span class="nav-link-text">Data Keluarga </span>
                </a>
                <?php endif; ?>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <?php if(Auth::check() && Auth::user()->level == 'admin'): ?>
                <a class="nav-link" href="<?php echo e(url ('pengaturan')); ?>">
                    <i class="vl_slider-h-range"></i>
                    <span class="nav-link-text">Pengaturan </span>
                </a>
                <?php endif; ?>
            </li>

        </ul>
        <!--/left side nav-->

        <!--nav push link-->
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="left-nav-toggler">
                    <i class="fa fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <!--/nav push link-->

        <!--header leftside links-->
        <ul class="navbar-nav header-links">
            <li class="nav-item dropdown">
                
            </li>
            <li class="nav-item dropdown">
                
            </li>
            <li class="nav-item dropdown">
                
            </li>
        </ul>
        <!--/header leftside links-->

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
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-thumb">
                        <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                    <a class="dropdown-item" href="#">
                        <?php if(Auth::check()): ?>
                            <?php echo e(Auth::user()->name); ?>

                        <?php endif; ?>
                    </a>
                    <div class="dropdown-divider"></div>
                    <?php if(Auth::check()): ?>
                    <a class="dropdown-item" href="<?php echo e(url('logout')); ?>">Sign Out</a>
                    <?php else: ?>
                    <a class="dropdown-item" href="<?php echo e(url('login')); ?>">Login</a>
                    <?php endif; ?>
                </div>
            </li>
        </ul>
        <!--/header rightside links-->

    </div>
</nav>
<!--/navigation : sidebar & header-->