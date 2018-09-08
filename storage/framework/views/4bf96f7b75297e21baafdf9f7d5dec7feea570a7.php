<?php echo $__env->make('admin/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-nav">

<?php echo $__env->make('admin/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Form Wizard</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--/page title-->

            <div class="row">
                

                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Data Keluarga</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="wizard-validation-form" action="#" class="right-text-label-form">
                                <div>
                                    <h3>
                                        <i class="vl_line-graph-pointed d-block"></i>
                                        Step 1
                                    </h3>
                                    <section>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Kelurahan *</label>
                                            <div class="col-sm-6">
                                                <input class="required form-control" id="Kelurahan" name="kelurahan" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Lingkungan *</label>
                                            <div class="col-sm-6">
                                                <input class="required form-control" id="lingkungan" name="lingkungan" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">No KK *</label>
                                            <div class="col-sm-6">
                                                <input class="required form-control" id="nokk" name="nokk" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm">Alamat *</label>
                                            <div class="col-sm-6">
                                                <input class="required form-control" id="alamat" name="alamat" type="text">
                                            </div>
                                        </div>

                                    </section>
                                    <h3>
                                        <i class="vl_dashboard d-block"></i>
                                        Step 2
                                    </h3>
                                    <section>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="name"> First name *</label>
                                            <div class="col-sm-6">
                                                <input id="name" name="name" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm " for="surname"> Last name *</label>
                                            <div class="col-sm-6">
                                                <input id="surname" name="surname" type="text" class="required form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="email">Email *</label>
                                            <div class="col-sm-6">
                                                <input id="email" name="email" type="text" class="required email form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label col-form-label-sm" for="address">Address </label>
                                            <div class="col-sm-6">
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>

                                    </section>
                                    <h3>
                                        <i class="vl_user-male d-block"></i>
                                        Step 3
                                    </h3>
                                    <section>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li>First Name : Jane  </li>
                                                    <li>Last Name : Doe </li>
                                                    <li>Emial: jane_doe@testmail.com</li>
                                                    <li>Address: 123 Dreamland, USA </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>
                                        <i class="vl_tick-circle d-block"></i>
                                        Step Final
                                    </h3>
                                    <section>
                                        <div class="form-group row">
                                            <div class="col-sm-12">
                                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

<?php echo $__env->make('admin/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

