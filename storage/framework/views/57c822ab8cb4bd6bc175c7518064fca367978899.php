<?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="fixed-nav">

<?php echo $__env->make('navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Data User</h4>
                    <?php echo $__env->make('_partial.flash_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
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
                                <a href="user/create" class="btn btn-primary btn-sm form-pill">Tambah User </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        
                        <?php if(count($user_list)>0): ?>
                            <?php /* expr */ ?>
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Full Name</th>
                                <th>User Name</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                            <?php foreach ($user_list as $user): ?>
                            <?php $no++ ;?>
                            <tr>
                                <td><?php echo e($no); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->username); ?></td>
                                <td><?php echo e($user->level); ?></td>
                                <td>
                                    <?php echo e(link_to('user/' . $user->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm form-pill'])); ?>

                                    <?php echo e(link_to('user/' . $user->id . '/delete', 'Delete', ['class' => 'btn btn-danger btn-sm form-pill'])); ?>

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

