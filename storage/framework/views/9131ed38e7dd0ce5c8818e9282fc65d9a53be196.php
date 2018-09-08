<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-nav">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data Warga</h4>
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

            <div class="col-xl-12 col-md-12">
                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-warning">
                            <div class="custom-title">
                                <?php echo e(link_to('warga/' . $IdKepalaKeluarga . '/createwarga', 'Tambah Anggota Keluarga', ['class' => 'btn btn-primary btn-sm form-pill'])); ?>

                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        
                        <?php /* <?php echo $__env->make('_partial.flash_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> */ ?>
                        
                        <?php if(count($Qwarga)>0): ?>
                            <?php /* expr */ ?>
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Warga</th>
                                <th>Hubungan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                            <?php foreach ($Qwarga as $anggotakeluarga): ?>
                                <?php /* foreach ($Qwarga as $anggotakeluarga_list) {
                                    echo $anggotakeluarga->nama;
                                } */ ?>
                            <?php $no++ ;?>
                            <tr>
                                <td><?php echo e($no); ?></td>
                                <td><?php echo e($anggotakeluarga->nama); ?></td>
                                <td><?php echo e($anggotakeluarga->hubungan); ?>

                                </td>
                                <td>
                                    <?php echo e(link_to('warga/' . $anggotakeluarga->WargaId . '/editwarga', 'Edit', ['class' => 'btn btn-primary btn-sm form-pill'])); ?>

                                    <?php echo Form::open(['method'=>'DELETE', 'action'=>['WargaController@deletewarga', $anggotakeluarga->WargaId ]]); ?>

                                    <?php echo Form::submit('Delete',  ['class' => 'btn btn-danger btn-sm form-pill']); ?>

                                    <?php echo Form::close(); ?>

                                    <?php /* <?php echo e(link_to('warga/' . $anggotakeluarga->WargaId . '/deletewarga', 'Delete', ['class' => 'btn btn-danger btn-sm form-pill'])); ?> */ ?>
                                </td>
                            </tr>

                            <?php endforeach ?>
                            
                            </tbody>
                        </table>
                            
                        <?php else: ?> <p> Data Kosong </p>

                        <?php endif; ?>

                    </div>
                </div>
            </div>

<?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

