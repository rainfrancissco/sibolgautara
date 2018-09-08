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
                                <?php echo Form::model($KepalaKeluarga, ['method' => 'PATCH', 'action' => ['KepalaKeluargaController@updatekk', $KepalaKeluarga->id_warga]]); ?>


                                    <?php echo Form::hidden('id_warga', $KepalaKeluarga->id_warga); ?>

                                    
                                    <?php /* Kelurahan */ ?>
                                    <?php if($errors->any()): ?>
                                        <div class="form-group">
                                            <?php echo e($errors->has('id_kelurahan') ? 'has-error' : 'has-success'); ?>

                                        </div>
                                    <?php else: ?>
                                        <div class="form-group row">
                                    <?php endif; ?>
                                        <?php echo Form::label('kelurahan', 'Kelurahan', ['class'=>'col-sm-3 col-form-label']); ?>

                                        <div class="col-sm-9">  

                                            <?php if(count($list_kelurahan)>0): ?>
                                                <?php echo Form::select('id_kelurahan', $list_kelurahan, null, ['class'=>'form-control form-control-sm rounded-0', 'id' => 'id_kelurahan', 'placeholder' => 'Pilih Kelurahan']); ?>

                                                <?php /* expr */ ?>
                                            <?php else: ?> 
                                                <p>Tidak ada Data Kelurahan </p>
                                            <?php endif; ?>

                                        </div>
                                        <?php if($errors->has('id_kelurahan')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('id_kelurahan')); ?>

                                            </span>
                                            <?php /* expr */ ?>
                                        <?php endif; ?>
                                        </div>

                                    <?php /* Nomor KK  */ ?>
                                    <?php if($errors->any()): ?>
                                        <div class="form-group">
                                            <?php echo e($errors->has('nokk') ? 'has-error' : 'has-success'); ?>

                                        </div>

                                    <?php else: ?>
                                        <div class="form-group row">
                                    <?php endif; ?>
                                        <?php echo Form::label('nokk', 'Nomor KK', ['class' => 'col-sm-3 col-form-label']); ?>

                                        <div class="col-sm-9">
                                        <?php echo Form::text('nokk', null, ['class'=>'form-control']); ?>

                                        </div>
                                        <?php if($errors->has('nokk')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('nokk')); ?>

                                            </span>
                                        <?php endif; ?>
                                        </div>

                                    <?php /* Alamat  */ ?>
                                    <?php if($errors->any()): ?>
                                        <div class="form-group">
                                            <?php echo e($errors->has('alamat') ? 'has-error' : 'has-success'); ?>

                                        </div>

                                    <?php else: ?>
                                        <div class="form-group row">
                                    <?php endif; ?>
                                        <?php echo Form::label('alamat', 'Alamat', ['class' => 'col-sm-3 col-form-label']); ?>

                                        <div class="col-sm-9">
                                        <?php echo Form::text('alamat', null, ['class'=>'form-control']); ?>

                                        </div>
                                        <?php if($errors->has('alamat')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('alamat')); ?>

                                            </span>
                                        <?php endif; ?>
                                        </div>


                                    <?php /* Lingkungan  */ ?>
                                    <?php if($errors->any()): ?>
                                        <div class="form-group">
                                            <?php echo e($errors->has('lingkungan') ? 'has-error' : 'has-success'); ?>

                                        </div>

                                    <?php else: ?>
                                        <div class="form-group row">
                                    <?php endif; ?>
                                        <?php echo Form::label('lingkungan', 'Lingkungan', ['class'=>'col-sm-3 col-form-label']); ?>

                                        <div class="col-sm-9">
                                            <?php echo Form::select('lingkungan', array(   'I' => 'I', 
                                                                                    'II' => 'II',
                                                                                    'III' => 'III',
                                                                                    'IV' => 'IV',
                                                                                    'V' => 'V',
                                                                                    'VI' => 'VI',
                                                                                    'VII' => 'VII',
                                                                                    'VIII' => 'VIII'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

                                        </div>
                                        <?php if($errors->has('lingkungan')): ?>
                                            <span class="help-block">
                                                <?php echo e($errors->first('lingkungan')); ?>

                                            </span>
                                            <?php /* expr */ ?>
                                        <?php endif; ?>
                                        </div>

                                        <?php /* SubmitButton */ ?>
                                        <div class="form-group text-center">
                                        <?php echo Form::submit('Update Data', ['class' => 'btn btn-primary btn-sm form-pill']); ?>

                                        </div>
                                <?php echo Form::close(); ?>

				            </div>
                    </div>
                </div>
            </div>


<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

