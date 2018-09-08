<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-nav">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Form Kelurahan</h4>
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
                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Form Kelurahan</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php echo Form::model($kelurahan, ['method'=>'PATCH', 'action'=>['KelurahanController@update', $kelurahan->id_kelurahan]]); ?>

                                <div class="form-group row">
                                    <?php echo Form::label('nama_kelurahan', "Nama Kelurahan", ['class' => 'col-sm-3 col-form-label']); ?>

                                    <div class="col-sm-9">
                                        <?php echo Form::text('kelurahan', null, ['class'=>'form-control']); ?>

                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Data Kelurahan</div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            
                            <?php if(!empty($kelurahan_list)): ?>

                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelurahan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0;?>
                                <?php foreach ($kelurahan_list as $kelurahan): ?>
                                <?php $no++ ;?>
                                <tr>
                                    <td><?php echo e($no); ?></td>
                                    <td><?php echo e($kelurahan->kelurahan); ?></td>
                                    <td>
                                        <?php echo e(link_to('kelurahan/' . $kelurahan->id_kelurahan . '/editKelurahan', 'Edit', ['class' => 'btn btn-warning btn-sm form-pill'])); ?>

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

