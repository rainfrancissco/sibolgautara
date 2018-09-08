
	<?php echo Form::hidden('id_user', Auth::user()->id); ?>


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
		<?php echo Form::select('lingkungan', array(	'I' => 'I', 
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


<?php /* Nama Warga  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('nama') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('nama', 'Nama', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('nama', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('nama')): ?>
		<span class="help-block">
			<?php echo e($errors->first('nama')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* NIK  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('nik') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('nik', 'NIK', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('nik', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('nik')): ?>
		<span class="help-block">
			<?php echo e($errors->first('nik')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Jenis Kelamin  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('jenis_kelamin') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('jenis_kelamin', 'Jenis Kelamin', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('jenis_kelamin', '0'); ?> Perempuan</label>
        </div>
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('jenis_kelamin', '1'); ?> Laki-laki</label>
        </div>

	</div>
	<?php if($errors->has('jenis_kelamin')): ?>
		<span class="help-block">
			<?php echo e($errors->first('jenis_kelamin')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Hubungan Keluarga  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_hubungan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_hubungan', 'Hubungan', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_hubungan', array('0' => 'Kepala Keluarga'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_hubungan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_hubungan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>


<?php /* Tempat Lahir  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('tempat_lahir') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('tempat_lahir', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('tempat_lahir')): ?>
		<span class="help-block">
			<?php echo e($errors->first('tempat_lahir')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Tanggal Lahir  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('tanggal_lahir') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::date('tanggal_lahir', null, ['class'=>'form-control', 'id'=>'tanggal_lahir']); ?>

	</div>
	<?php if($errors->has('tanggal_lahir')): ?>
		<span class="help-block">
			<?php echo e($errors->first('tanggal_lahir')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Status Perkawinan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_kawin') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_kawin', 'Status Kawin', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_kawin', array('0' => 'Kawin', 
        							   	   '1' => 'Belum Kawin',
        								   '2' => 'Janda',
        								   '3' => 'Duda'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_kawin')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_kawin')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Agama  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_agama') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_agama', 'Agama', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_agama', array('0' => 'Islam', 
        							   	   '1' => 'Kristen',
        								   '2' => 'Katolik',
        								   '3' => 'Hindu',
        								   '4' => 'Budha'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_agama')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_agama')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Lembaga  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_lembaga') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_lembaga', 'Lembaga yg diikuti', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_lembaga', array('0' => 'Tidak Ada', 
        							   	   	 '1' => 'PKK',
        							   	   	 '2' => 'LPM',
        								   	 '3' => 'Karang Taruna',
        								   	 '4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_lembaga')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_lembaga')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* WNI/WNA */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_wni') ? 'has-error' : 'has-success'); ?>

	</div>
<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_wni', 'Warga Negara', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_wni', '0'); ?> Warga Negara Indonesia</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_wni', '1'); ?> Warga Negara Asing</label>
        </div>
	</div>
	<?php if($errors->has('id_wni')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_wni')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Suku  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_suku') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_suku', 'Suku', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_suku', array('0' => 'Batak', 
        							   	   '1' => 'Melayu',
        								   '2' => 'Nias',
        								   '3' => 'Dairi',
        								   '4' => 'Jawa',
        								   '5' => 'Aceh',
        								   '6' => 'Padang',
        								   '7' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_suku')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_suku')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Pendidikan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_pendidikan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_pendidikan', 'Pendidikan Terakhir', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_pendidikan', array('0' => 'Tidak Sekolah', 
        							   	   '1' => 'Sekolah Dasar (SD)',
        								   '2' => 'SLTP/SMP',
        								   '3' => 'SLTA/SMA',
        								   '4' => 'Diploma',
        								   '5' => 'Sarjana',
        								   '6' => 'Master',
        								   '7' => 'Doktor'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_pendidikan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_pendidikan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Baca Tulis  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_bacatulis') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_bacatulis', 'Baca & Tulis', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_bacatulis', '0'); ?> Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_bacatulis', '1'); ?> Tidak</label>
        </div>
	</div>
	<?php if($errors->has('id_bacatulis')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_bacatulis')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Mata Pancaharian  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_matapencarian') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_matapencarian', 'Mata Pencaharian', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_matapencarian', array(	'0' => 'Pegawai Negeri Sipil', 
        							   	   			'1' => 'TNI/Polri',
        								   			'2' => 'Pensiunan',
		        								   	'3' => 'Bidan/Perawat',
		        								   	'4' => 'Dokter',
		        								   	'5' => 'Karyawan Swasta',
		        								   	'6' => 'Wiraswasta',
		        								   	'7' => 'Petani',
		        								   	'8' => 'Pedagang',
		        								   	'9' => 'Buruh',
		        								   	'10' => 'Sopir',
		        								   	'11' => 'Pelajar/Mahasiswa',
		        								   	'12' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_matapencarian')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_matapencarian')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Nama Ayah  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('nama_ayah') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('nama_ayah', 'Nama Ayah', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('nama_ayah', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('nama_ayah')): ?>
		<span class="help-block">
			<?php echo e($errors->first('nama_ayah')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Nama Ibu  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('nama_ibu') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('nama_ibu', 'Nama Ibu', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('nama_ibu', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('nama_ibu')): ?>
		<span class="help-block">
			<?php echo e($errors->first('nama_ibu')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Akta Lahir  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('akta_lahir') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('akta_lahir', 'Nomor Akta Lahir', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('akta_lahir', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('akta_lahir')): ?>
		<span class="help-block">
			<?php echo e($errors->first('akta_lahir')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* ID EKTP  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_ektp') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_ektp', 'Punya E-KTP?', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_ektp', '0'); ?> Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_ektp', '1'); ?> Tidak</label>
        </div>
	</div>
	<?php if($errors->has('id_ektp')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_ektp')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Akseptor KB  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_kb') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_kb', 'Akseptor KB', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_kb', '0'); ?> Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_kb', '1'); ?> Tidak</label>
        </div>
	</div>
	<?php if($errors->has('id_kb')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_kb')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Kategori Miskin  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_kemiskinan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_kemiskinan', 'Kategori Miskin', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_kemiskinan', array(	'0' => 'Fakir/Sangat Miskin', 
        							   	   			'1' => 'Miskin',
        								   			'2' => 'Mendekati Miskin',
		        								   	'3' => 'Mampu'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_kemiskinan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_kemiskinan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>


<?php /* Status Kepemilikan Rumah  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_rumah') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_rumah', 'Status Kepemilikan Tanah/Rumah', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_rumah', array(	'0' => 'Sertifikat', 
        							   	   	'1' => 'Surat Camat/Lurah',
        								   	'2' => 'Warisan/Jual Beli',
        								   	'3' => 'Sewa',
		        							'4' => 'Menumpang'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_rumah')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_rumah')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Kepemilikan PBB  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_pbb') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_pbb', 'Kepemilikan PBB', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_pbb', '0'); ?> Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_pbb', '1'); ?> Tidak</label>
        </div>
	</div>
	<?php if($errors->has('id_pbb')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_pbb')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Penghasilan per bulan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_penghasilan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_penghasilan', 'Penghasilan (bulan)', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_penghasilan', array(	'0' => '<= 1 juta', 
		        							   	   	'1' => '1 - 2 juta',
		        								   	'2' => '2 - 3 juta',
		        								   	'3' => '3 - 4 juta',
				        							'4' => '>= 5 juta'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_penghasilan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_penghasilan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Kepemilikan Lahan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_lahan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_lahan', 'Kepemilikan Lahan', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_lahan', '0'); ?> Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_lahan', '1'); ?> Tidak</label>
        </div>
	</div>
	<?php if($errors->has('id_lahan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_lahan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>


<?php /* Sumber Air Minum  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_sumberair') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_sumberair', 'Sumber Air Minum', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_sumberair', array(	'0' => 'PDAM', 
		        							   	'1' => 'Sumur Bor',
		        								'2' => 'Sumur Resapan',
		        								'3' => 'Sungai',
				        						'4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_sumberair')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_sumberair')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>


<?php /* Bantuan Pemerintah  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_bantuan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_bantuan', 'Bantuan Pemerintah', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_bantuan', array(	'0' => 'BPJS', 
		        							   	'1' => 'BPJS+Raskin',
		        								'2' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_bantuan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_bantuan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>


<?php /* Kebiasaan Berobat  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_berobat') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_berobat', 'Kebiasaan Pemerintah', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_berobat', array(	'0' => 'Puskesmas', 
		        							   	'1' => 'Rumah Sakit Umum',
		        							   	'2' => 'Tradisional',
		        								'3' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_berobat')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_berobat')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>


<?php /* Alat Penerangan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_penerangan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_penerangan', 'Penerangan yang digunakan', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label><?php echo Form::radio('id_penerangan', '0'); ?> Listrik</label>
        </div>
		<div class="iCheck-flat-blue">
			<label><?php echo Form::radio('id_penerangan', '1'); ?> Non Listrik</label>
        </div>
	</div>
	<?php if($errors->has('id_penerangan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_penerangan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Alat Memasak  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_memasak') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_memasak', 'Alat Memasak', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_memasak', array(	'0' => 'Gas 3 Kg', 
		        							   	'1' => 'Gas 5 Kg',
		        							   	'2' => 'Gas 12 Kg',
		        							   	'3' => 'Minyak Tanah',
		        							   	'4' => 'Listrik',
		        							   	'5' => 'Kayu/Tungku',
		        								'6' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_memasak')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_memasak')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Kepemilikan Ternak  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('ternak') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('ternak', 'Kepemilikan Ternak', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('ternak', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('ternak')): ?>
		<span class="help-block">
			<?php echo e($errors->first('ternak')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Kendaraan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('kendaraan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('kendaraan', 'Kepemilikan Kendaraan', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('kendaraan', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('kendaraan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('kendaraan')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Kelainan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('kelainan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('kelainan', 'Kelainan Fisik', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('kelainan', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('kelainan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('kelainan')); ?>

		</span>
	<?php endif; ?>
	</div>


<?php /* Usaha Industri  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('usaha') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('usaha', 'Usaha Industri', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('usaha', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('usaha')): ?>
		<span class="help-block">
			<?php echo e($errors->first('usaha')); ?>

		</span>
	<?php endif; ?>
	</div>

<?php /* Bangunan Rumah  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_bangunan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_bangunan', 'Alat Memasak', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_bangunan', array(	'0' => 'Permanen', 
		        							   	'1' => 'Semi Permanen',
		        							   	'2' => 'Kayu',
		        							   	'3' => 'Panggung',
		        								'4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_bangunan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_bangunan')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* Jumalah Tanggungan  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('tanggungan') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('tanggungan', 'Jumlah Tanggungan', ['class' => 'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
	<?php echo Form::text('tanggungan', null, ['class'=>'form-control']); ?>

	</div>
	<?php if($errors->has('tanggungan')): ?>
		<span class="help-block">
			<?php echo e($errors->first('tanggungan')); ?>

		</span>
	<?php endif; ?>
	</div>


<?php /* Kode Penduduk  */ ?>
<?php if($errors->any()): ?>
	<div class="form-group">
		<?php echo e($errors->has('id_penduduk') ? 'has-error' : 'has-success'); ?>

	</div>

<?php else: ?>
	<div class="form-group row">
<?php endif; ?>
	<?php echo Form::label('id_penduduk', 'Kode Penduduk', ['class'=>'col-sm-3 col-form-label']); ?>

	<div class="col-sm-9">
		<?php echo Form::select('id_penduduk', array(	'0' => 'Penduduk Kelurahan Domisili di Kelurahan', 
		        							   	'1' => 'Penduduk Kelurahan Domisili diluar Kelurahan',
		        							   	'2' => 'Penduduk Kelurahan Domisili diluar Kecamatan',
		        							   	'3' => 'Penduduk Kelurahan Domisili diluar Kota',
		        								'4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']); ?>

	</div>
	<?php if($errors->has('id_penduduk')): ?>
		<span class="help-block">
			<?php echo e($errors->first('id_penduduk')); ?>

		</span>
		<?php /* expr */ ?>
	<?php endif; ?>
	</div>

<?php /* SubmitButton */ ?>
<div class="form-group text-center">
	<?php echo Form::submit($submitButtonText, ['class' => 'btn btn-primary btn-sm form-pill']); ?>

</div>