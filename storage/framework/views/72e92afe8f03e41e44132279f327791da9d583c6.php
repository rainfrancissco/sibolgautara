<?php if(isset($user)): ?>
	<?php echo Form::hidden('id', $user->id); ?>

<?php endif; ?>

<?php /* Nama */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('name') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('name', 'Nama', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('name', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('name')): ?>
		<span class="help-block">
			<?php echo e($errors->first('name')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* UserName */ ?>
<?php if($errors->any()): ?>
	<div class="valid-feedback">
        	<?php echo e($errors->first('username')); ?>

        </div>
<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('username', 'Username', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">	
	<?php echo Form::text('username', null, ['class'=>'form-control', 'id'=>'validationCustom01']); ?>

	</div>
	<?php if($errors->has('username')): ?>
		<div class="valid-feedback">
        	<?php echo e($errors->first('username')); ?>

        </div>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Level */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('level') ? 'has-error' : 'has-success'); ?>

	</div>
<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('level', 'Level', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('level', 'admin'); ?> Admin</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('level', 'operator'); ?> Operator </label>
        </div>
	</div>
	<?php if($errors->has('level')): ?>
		<span class="help-block">
			<?php echo e($errors->first('level')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

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
		<?php /* <?php echo Form::select('id_kelurahan', array('1' => 'Ada', '2' => 'Begu'), null); ?>

 */ ?>
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

<?php /* Password */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('password') ? 'has-error' : 'has-success'); ?>

	</div>
<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('password', 'Password', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">	
	<?php echo Form::password('password', ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('password')): ?>
		<span class="help-block">
			<?php echo e($errors->first('password')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Password Confirmation */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('password_confirmation') ? 'has-error' : 'has-success'); ?>

	</div>
<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('password_confirmation', 'Password Confirmation', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">	
	<?php echo Form::password('password_confirmation', ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('password_confirmation')): ?>
		<span class="help-block">
			<?php echo e($errors->first('password_confirmation')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* SubmitButton */ ?>
<div class="form-group">
	<?php echo Form::submit($submitButtonText, ['class' => 'btn btn-primary btn-sm form-pill']); ?>

</div>