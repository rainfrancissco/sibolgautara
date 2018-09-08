<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-nav leftnav-floating">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--main content wrapper-->
<div class="content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-shadow mb-4 pt-4 bg-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="custom-title-wrap border-0 mt-2 mb-4">
                                    <div class="custom-title text-light">Short Reports</div>
                                    <div class="custom-post-title">Here are some short report examples</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="media d-flex align-items-center  mb-4">
                                    <div class="mr-4 rounded-circle bg-warning sr-icon-box bubble-shadow-small">
                                        <i class="vl_user-male"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-uppercase mb-0 weight500 text-light">4,87,654</h4>
                                        <span class="text-muted">Visit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="media d-flex align-items-center  mb-4">
                                    <div class="mr-4 rounded-circle bg-purple sr-icon-box bubble-shadow-small">
                                        <i class="vl_download"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-uppercase mb-0 weight500 text-light">4,87,654</h4>
                                        <span class="text-muted">Downloads</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="media d-flex align-items-center  mb-4">
                                    <div class="mr-4 rounded-circle bg-danger sr-icon-box bubble-shadow-small">
                                        <i class="vl_shopping-bag2"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="text-uppercase mb-0 weight500 text-light">4,87,654</h4>
                                        <span class="text-muted">Active Installation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card card-shadow mb-4 bg-purple text-light">
                    <div class="card-body pb-0">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-5">
                                <p class="mb-0">Sales In July</p>
                                <h4>$ 2675.00</h4>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-7">
                                <div class="row">
                                    <div class="col-4">
                                        <small>Direct Sale</small>
                                        <h5>$ 1765</h5>
                                    </div>
                                    <div class="col-4">
                                        <small>Referal</small>
                                        <h5>$ 890</h5>
                                    </div>
                                    <div class="col-4">
                                        <small>Affiliate</small>
                                        <h5>$ 120</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-4">
                            <canvas id="mixed_chart" height="148"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card card-shadow mb-4">
                    <div class="card-body">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-4 col-lg-4 text-center">
                                <img class="d-inline-block mb-3 mb-lg-0" src="assets/img/watch.png" srcset="assets/img/watch@2x.png 2x" alt=""/>
                            </div>
                            <div class="col-sm-8 col-lg-8">
                                <h4 class="weight600 mb-0">Bhawin Jahad</h4>
                                <small class="text-muted f12">Rebook perforated collegiate Navy</small>
                                <div class="widget-price mt-3">
                                    <span class="text-primary f24">
                                        $ 3,205
                                    </span>
                                    <del class="text-muted">$2320</del>
                                </div>
                                <p class="text-muted f12">Limited offer till April’ 30</p>
                                <div class="size text-muted mt-4">
                                    Size  :  Medium
                                    <a href="#" class="btn btn-primary btn-pill btn-sm float-right">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">Donut Chart</div>
                            <div class="custom-post-title">Outstanding pie chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <div id="d_profit" style="height:130px; width:100%;"></div>
                            </div>
                            <div class="col-5">
                                <h5 class="mb-3">Legend</h5>
                                <ul class="list-unstyled f12 text-muted">
                                    <li class="mb-2">
                                        <i class="fa fa-circle pr-2 text-warning "></i>
                                        <span>Data A: 33%</span>
                                    </li>
                                    <li class="mb-2">
                                        <i class="fa fa-circle pr-2 text-purple"></i>
                                        <span>Data B: 33%</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-circle pr-2 text-info"></i>
                                        <span>Data C: 33%</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-turquoise">
                            <div class="custom-title">Bar Chart</div>
                            <div class="custom-post-title">Awesome bar chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <span id="bar_widget"></span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-pink">
                            <div class="custom-title">Bubble Chart</div>
                            <div class="custom-post-title">Excellent bubble chart example is given bellow</div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <canvas id="bubble_chart" height="170"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-turquoise">
                            <div class="custom-title">Sales Monitor</div>

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
                            <div class="col-xl-5 col-md-5">
                                <p class="text-muted mb-5">Proper sell monitoring through the world map to plan <br/>
                                    for the next marketing attempt</p>

                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Europe</span>
                                        <span class="float-right">35%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-turquoise" role="progressbar" style="width: 35%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Latin America </span>
                                        <span class="float-right">55%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-purple" role="progressbar" style="width: 55%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="progress-title">
                                        <span>Australia</span>
                                        <span class="float-right">85%</span>
                                    </div>
                                    <div class="progress" style="height: 1px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 85%;"  aria-valuemax="100"></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-7 col-md-7">
                                <div class="map-wrapper" id="world-map"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-primary">
                            <div class="custom-title">Today's Activity</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled base-timeline">
                            <li class="time-dot-primary">
                                <div class="base-timeline-info">
                                    <a href="#">John123</a> Successfully purchased item#26
                                </div>
                                <small class="text-muted">
                                    28 mins ago
                                </small>
                            </li>
                            <li class="time-dot-danger">
                                <div class="base-timeline-info">
                                    <a href="#" class="text-danger">Farnandez</a> placed the order for accessories
                                </div>
                                <small class="text-muted">
                                    2 days ago
                                </small>
                            </li>
                            <li class="time-dot-purple">
                                <div class="base-timeline-info">
                                    User <a href="#" class="text-purple">Lisa Maria</a> checked out from the market
                                </div>
                                <small class="text-muted">
                                    12 mins ago
                                </small>
                            </li>
                            <li class="time-dot-turquoise">
                                <div class="base-timeline-info">
                                    <a href="#" class="text-info">Charlie Johnson  </a> joined DashLab last week. Congrats to him
                                </div>
                                <small class="text-muted">
                                    3 days ago
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-success">
                            <div class="custom-title">Todo List</div>
                        </div>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="todo-list-item list-unstyled" id="todo-list">
                            <li class="todo-bg-primary">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Scheduled Meeting with Anthony
                                </p>
                            </li>
                            <li class="todo-bg-danger">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Submit monthly report to John Doe
                                </p>
                            </li>
                            <li class="todo-bg-purple">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Follow up the team work
                                </p>
                            </li>
                            <li class="todo-bg-info">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Submit monthly report to John Doe
                                </p>
                            </li>
                            <li class="todo-bg-success">
                                <div class="chk-todo float-left">
                                    <input type="checkbox" value="0" />
                                </div>
                                <p class="todo-title">
                                    Follow up the team work
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <div class="row">
                            <div class="col-10">
                                <input type="text" class="form-control border-0 f14" placeholder="Add new task"/>
                            </div>
                            <div class="col-2">
                                <a href="javascript:;" class="btn-todo-list float-right mt-1">
                                    <i class="fa fa-paper-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">Chat</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chat-wrap" style="height: 280px">
                            <ul class="list-unstyled">
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            Hi Pristly, How are you?
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat-info">
                                        <div class="chat-text">
                                            I am fine. Danny I need a
                                            help from you. It will be
                                            great for me if you can
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            oh sure tell me, if i can
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat-info">
                                        <div class="chat-text">
                                            I need a dashboard for my project
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            ok, how can i help you?
                                        </div>
                                    </div>
                                </li>
                                <li class="sender">
                                    <div class="chat-info">
                                        <div class="chat-text">
                                            can you make a design for this
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="chat-info">
                                        <div class="chat-avatar mr-3">
                                            <img src="assets/img/avatar/avatar-mini1.jpg" alt=""/>
                                        </div>
                                        <div class="chat-text">
                                            Yeah sure, I'll give you a design next week
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer border-0 pt-0 chat-type">
                        <div class="row">
                            <div class="col-10">
                                <a href="javascript:;" class="file-attachment float-left">
                                    <i class="fa fa-paperclip"></i>
                                </a>
                                <input type="text" class="form-control border-0 f14" placeholder="Type something here"/>
                            </div>
                            <div class="col-2">
                                <a href="javascript:;" class="btn-todo-list btn-primary float-right mt-1">
                                    <i class="fa fa-paper-plane"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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

    </div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>