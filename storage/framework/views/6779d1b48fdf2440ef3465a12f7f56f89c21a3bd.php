<?php if($errors->any()): ?>
	<?php /* expr */ ?>
	<ul class="alert alert-danger">
		<?php foreach($errors->all() as $error): ?>
			<li><?php echo e($error); ?>

				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
		        </button>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>