@include('header')

<body class="fixed-nav leftnav-floating">

@include('navbar')

<!--main content wrapper-->
<div class="content-wrapper">
        <!--creative states-->
        <div class="creative-state-area basic-gradient">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h4 class="creative-state-title">Data Masuk</h4>
                </div>
                <div class="col-lg-5  col-12 text-lg-right">
                    <div class="row short-states mb-lg-0 mb-4">
                        <div class="col-6">
                            <span class="pr-2">unique visitors</span>
                            <span id="unique_visitors"></span>
                        </div>
                        <div class="col-6">
                            <span class="pr-2">total visitors</span>
                            <span id="total_visitors"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-danger text-center pull-left">
                        <i class="vl_clip-board"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
                        <h3 class="mt-4">{{ $TotalDataWarga }} </h3>
                        <p class="mb-0">Total Data Warga</p>
                        
                        <div class="">
                            <canvas id="state_order_chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-warning text-center pull-left">
                        <i class="vl_cart-full"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
                        <?php foreach ($MaxWarga as $Max): ?>

                        <h3 class="mt-4">{{ $Max->jumlah }}</h3>
                        <p class="mb-0">{{ $Max->kelurahan}}</p>

                        <?php endforeach ?>
                        <div class=" widget-action-link">
                            <small class="text-success weight700">Data Tertinggi <i class="fa fa-long-arrow-up"></i></small>
                        </div>
                        <div class="">
                            <canvas id="state_sale_chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-purple text-center pull-left">
                        <i class="vl_dollar-on-hand"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
                        <?php foreach ($MinWarga as $Min): ?>

                        <h3 class="mt-4">{{ $Min->jumlah}}</h3>
                        <p class="mb-0">{{$Min->kelurahan}}</p>

                        <?php endforeach ?>
                        <div class=" widget-action-link">
                            <small class="text-danger weight700">Data Terendah <i class="fa fa-long-arrow-down"></i></small>
                        </div>
                        <div class="">
                            <canvas id="state_profit_chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/creative states-->

        <div class="container-fluid">

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

                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-success">
                                <div class="custom-title">Area Chart</div>
                                <div class="custom-post-title">Outstanding area chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="area_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Line Chart</div>
                                <div class="custom-post-title">Awesome line chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="line_chart" height="150"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-info">
                                <div class="custom-title">Stacked Chart</div>
                                <div class="custom-post-title">Excellent stacked chart example is given bellow</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="hbar-placeholder" class="fchart-height"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sales report & active user-->
            <div class="row">
                <div class="col-xl-8 col-md-7">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">Sales Report</div>
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
                            <div class="row text-center mb-4">
                                <div class="col-4">
                                    <h4 class="mb-0">$120 <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                    <small class="text-muted text-uppercase">Today's Sales</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0">$740 <i class="fa fa-long-arrow-down text-danger f14"></i></h4>
                                    <small class="text-muted text-uppercase">This Week Sales</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0">$3740 <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                    <small class="text-muted text-uppercase">This Month Sales</small>
                                </div>
                            </div>
                            <div>
                                <canvas id="sales_report_chart" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5">
                    <div class="card text-light mb-4 basic-gradient bubble-shadow">
                        <div class="widget-action-link">
                            <div class="dropdown">
                                <a href="#" class="btn btn-transparent text-white dropdown-hover p-0" data-toggle="dropdown">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                    <a class="dropdown-item" href="#"> Edit</a>
                                    <a class="dropdown-item" href="#"> Delete</a>
                                    <a class="dropdown-item" href="#"> Settings</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="widget-active-user">
                                <h5 class="mt-3 b-b1 mb-4">Active user right now</h5>
                                <h1 class="mb-4">13</h1>
                                <h5 class="mt-3 b-b1 mb-5">Page view per minutes</h5>
                                <div id="active_users" class="text-center"></div>
                                <h5 class="mt-5 mb-0">Top active pages</h5>
                                <ul class="list-unstyled active-page-link">
                                    <li><small>/product/dashlab/sample-one.html</small> <span>1</span></li>
                                    <li><small>/product/flatlab/ui-components.php</small> <span>3</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/sales report & active user-->


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
                                <div class="tab-pane fade show active" id="pills-weekly2" role="tabpanel">
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
                                <div class="tab-pane fade" id="pills-month2" role="tabpanel">
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

            <!--sales monitor-->
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
            <!--/sales monitor-->


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

        </div>

        <!--footer-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>Copyright &copy; VectorLab 2018</small>
                </div>
            </div>
        </footer>
        <!--/footer-->
    </div>


@include('footer')