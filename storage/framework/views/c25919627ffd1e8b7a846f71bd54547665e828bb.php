<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-nav">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data User</h4>
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
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title"> Edit Data User</div>
                            </div>
                        </div>
                        <div class="card-body">
				            <div class="col-xl-12 col-md-12">
				                <?php echo Form::open(['url' => 'user']); ?>

                    				<?php echo $__env->make('user.form', ['submitButtonText' => 'Tambah User'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                				<?php echo Form::close(); ?> 
				                <?php echo Form::close(); ?>              
				            </div>
                    </div>
                </div>
            </div>


<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

