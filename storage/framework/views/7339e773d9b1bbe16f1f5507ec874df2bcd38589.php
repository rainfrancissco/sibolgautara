<?php if(Session::has('flash_message')): ?>
	<div class="alert alert-success <?php echo e(Session::has('penting') ? 'alert-important' : ''); ?> alert-dismissible fade show" role="alert">
		<?php echo e(Session::get('flash_message')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
<?php endif; ?>