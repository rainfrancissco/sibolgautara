
	{!! Form::hidden('id_user', Auth::user()->id) !!}

{{-- Kelurahan --}}
@if (Auth::user()->level=='admin')
	@if ($errors->any())
		<div class="form-group">
			{{ $errors->has('id_kelurahan') ? 'has-error' : 'has-success' }}
		</div>
	@else
		<div class="form-group row">
	@endif
		{!! Form::label('kelurahan', 'Kelurahan', ['class'=>'col-sm-3 col-form-label']) !!}
		<div class="col-sm-9">	

			@if (count($list_kelurahan)>0)
				{!! Form::select('id_kelurahan', $list_kelurahan, null, ['class'=>'form-control form-control-sm rounded-0', 'id' => 'id_kelurahan', 'placeholder' => 'Pilih Kelurahan']) !!}
				{{-- expr --}}
			@else 
				<p>Tidak ada Data Kelurahan </p>
			@endif

		</div>
		@if ($errors->has('id_kelurahan'))
			<span class="help-block">
				{{ $errors->first('id_kelurahan') }}
			</span>
			{{-- expr --}}
		@endif
		</div>
		{{-- expr --}}
@else
	{!! Form::hidden('id_kelurahan', Auth::user()->id_kelurahan) !!}
@endif

{{-- Nomor KK  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('nokk') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('nokk', 'Nomor KK', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('nokk', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('nokk'))
		<span class="help-block">
			{{ $errors->first('nokk') }}
		</span>
	@endif
	</div>

{{-- Alamat  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('alamat') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('alamat', 'Alamat', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('alamat', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('alamat'))
		<span class="help-block">
			{{ $errors->first('alamat') }}
		</span>
	@endif
	</div>


{{-- Lingkungan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('lingkungan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('lingkungan', 'Lingkungan', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('lingkungan', array(	'I' => 'I', 
		        							   	'II' => 'II',
		        							   	'III' => 'III',
		        							   	'IV' => 'IV',
		        							   	'V' => 'V',
		        							   	'VI' => 'VI',
		        							   	'VII' => 'VII',
		        								'VIII' => 'VIII'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('lingkungan'))
		<span class="help-block">
			{{ $errors->first('lingkungan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Nama Warga  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('nama') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('nama', 'Nama', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('nama', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('nama'))
		<span class="help-block">
			{{ $errors->first('nama') }}
		</span>
	@endif
	</div>

{{-- NIK  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('nik') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('nik', 'NIK', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('nik', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('nik'))
		<span class="help-block">
			{{ $errors->first('nik') }}
		</span>
	@endif
	</div>

{{-- Jenis Kelamin  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('jenis_kelamin', '0') !!} Perempuan</label>
        </div>
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('jenis_kelamin', '1') !!} Laki-laki</label>
        </div>

	</div>
	@if ($errors->has('jenis_kelamin'))
		<span class="help-block">
			{{ $errors->first('jenis_kelamin') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Hubungan Keluarga  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_hubungan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_hubungan', 'Hubungan', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_hubungan', array('0' => 'Kepala Keluarga'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_hubungan'))
		<span class="help-block">
			{{ $errors->first('id_hubungan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Tempat Lahir  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('tempat_lahir') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('tempat_lahir', 'Tempat Lahir', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('tempat_lahir', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('tempat_lahir'))
		<span class="help-block">
			{{ $errors->first('tempat_lahir') }}
		</span>
	@endif
	</div>

{{-- Tanggal Lahir  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('tanggal_lahir') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::date('tanggal_lahir', null, ['class'=>'form-control', 'id'=>'tanggal_lahir']) !!}
	</div>
	@if ($errors->has('tanggal_lahir'))
		<span class="help-block">
			{{ $errors->first('tanggal_lahir') }}
		</span>
	@endif
	</div>

{{-- Status Perkawinan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_kawin') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_kawin', 'Status Kawin', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_kawin', array('0' => 'Kawin', 
        							   	   '1' => 'Belum Kawin',
        								   '2' => 'Janda',
        								   '3' => 'Duda'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_kawin'))
		<span class="help-block">
			{{ $errors->first('id_kawin') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Agama  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_agama') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_agama', 'Agama', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_agama', array('0' => 'Islam', 
        							   	   '1' => 'Kristen',
        								   '2' => 'Katolik',
        								   '3' => 'Hindu',
        								   '4' => 'Budha'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_agama'))
		<span class="help-block">
			{{ $errors->first('id_agama') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Lembaga  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_lembaga') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_lembaga', 'Lembaga yg diikuti', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_lembaga', array('0' => 'Tidak Ada', 
        							   	   	 '1' => 'PKK',
        							   	   	 '2' => 'LPM',
        								   	 '3' => 'Karang Taruna',
        								   	 '4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_lembaga'))
		<span class="help-block">
			{{ $errors->first('id_lembaga') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- WNI/WNA --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_wni') ? 'has-error' : 'has-success' }}
	</div>
@else
	<div class="form-group row">
@endif
	{!! Form::label('id_wni', 'Warga Negara', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_wni', '0') !!} Warga Negara Indonesia</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_wni', '1') !!} Warga Negara Asing</label>
        </div>
	</div>
	@if ($errors->has('id_wni'))
		<span class="help-block">
			{{ $errors->first('id_wni') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Suku  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_suku') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_suku', 'Suku', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_suku', array('0' => 'Batak', 
        							   	   '1' => 'Melayu',
        								   '2' => 'Nias',
        								   '3' => 'Dairi',
        								   '4' => 'Jawa',
        								   '5' => 'Aceh',
        								   '6' => 'Padang',
        								   '7' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_suku'))
		<span class="help-block">
			{{ $errors->first('id_suku') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Pendidikan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_pendidikan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_pendidikan', 'Pendidikan Terakhir', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_pendidikan', array('0' => 'Tidak Sekolah', 
        							   	   '1' => 'Sekolah Dasar (SD)',
        								   '2' => 'SLTP/SMP',
        								   '3' => 'SLTA/SMA',
        								   '4' => 'Diploma',
        								   '5' => 'Sarjana',
        								   '6' => 'Master',
        								   '7' => 'Doktor'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_pendidikan'))
		<span class="help-block">
			{{ $errors->first('id_pendidikan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Baca Tulis  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_bacatulis') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_bacatulis', 'Baca & Tulis', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_bacatulis', '0') !!} Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_bacatulis', '1') !!} Tidak</label>
        </div>
	</div>
	@if ($errors->has('id_bacatulis'))
		<span class="help-block">
			{{ $errors->first('id_bacatulis') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Mata Pancaharian  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_matapencarian') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_matapencarian', 'Mata Pencaharian', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_matapencarian', array(	'0' => 'Pegawai Negeri Sipil', 
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
		        								   	'13' => 'Ibu Rumah Tangga',
		        								   	'14' => 'Belum Bekerja',
		        								   	'12' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_matapencarian'))
		<span class="help-block">
			{{ $errors->first('id_matapencarian') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Nama Ayah  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('nama_ayah') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('nama_ayah', 'Nama Ayah', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('nama_ayah', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('nama_ayah'))
		<span class="help-block">
			{{ $errors->first('nama_ayah') }}
		</span>
	@endif
	</div>

{{-- Nama Ibu  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('nama_ibu') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('nama_ibu', 'Nama Ibu', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('nama_ibu', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('nama_ibu'))
		<span class="help-block">
			{{ $errors->first('nama_ibu') }}
		</span>
	@endif
	</div>

{{-- Akta Lahir  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('akta_lahir') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('akta_lahir', 'Nomor Akta Lahir', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('akta_lahir', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('akta_lahir'))
		<span class="help-block">
			{{ $errors->first('akta_lahir') }}
		</span>
	@endif
	</div>

{{-- ID EKTP  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_ektp') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_ektp', 'Punya E-KTP?', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_ektp', '0') !!} Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_ektp', '1') !!} Tidak</label>
        </div>
	</div>
	@if ($errors->has('id_ektp'))
		<span class="help-block">
			{{ $errors->first('id_ektp') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Akseptor KB  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_kb') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_kb', 'Akseptor KB', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_kb', '0') !!} Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_kb', '1') !!} Tidak</label>
        </div>
	</div>
	@if ($errors->has('id_kb'))
		<span class="help-block">
			{{ $errors->first('id_kb') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Kategori Miskin  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_kemiskinan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_kemiskinan', 'Kategori Miskin', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_kemiskinan', array(	'0' => 'Fakir/Sangat Miskin', 
        							   	   			'1' => 'Miskin',
        								   			'2' => 'Mendekati Miskin',
		        								   	'3' => 'Mampu'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_kemiskinan'))
		<span class="help-block">
			{{ $errors->first('id_kemiskinan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Status Kepemilikan Rumah  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_rumah') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_rumah', 'Status Kepemilikan Tanah/Rumah', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_rumah', array(	'0' => 'Sertifikat', 
        							   	   	'1' => 'Surat Camat/Lurah',
        								   	'2' => 'Warisan/Jual Beli',
        								   	'3' => 'Sewa',
		        							'4' => 'Menumpang'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_rumah'))
		<span class="help-block">
			{{ $errors->first('id_rumah') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Kepemilikan PBB  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_pbb') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_pbb', 'Kepemilikan PBB', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_pbb', '0') !!} Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_pbb', '1') !!} Tidak</label>
        </div>
	</div>
	@if ($errors->has('id_pbb'))
		<span class="help-block">
			{{ $errors->first('id_pbb') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Penghasilan per bulan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_penghasilan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_penghasilan', 'Penghasilan (bulan)', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_penghasilan', array(	'0' => '<= 1 juta', 
		        							   	   	'1' => '1 - 2 juta',
		        								   	'2' => '2 - 3 juta',
		        								   	'3' => '3 - 4 juta',
		        								   	'4' => '>= 5 juta',
				        							'5' => 'Tidak Ada'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_penghasilan'))
		<span class="help-block">
			{{ $errors->first('id_penghasilan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Kepemilikan Lahan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_lahan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_lahan', 'Kepemilikan Lahan', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_lahan', '0') !!} Ya</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_lahan', '1') !!} Tidak</label>
        </div>
	</div>
	@if ($errors->has('id_lahan'))
		<span class="help-block">
			{{ $errors->first('id_lahan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Sumber Air Minum  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_sumberair') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_sumberair', 'Sumber Air Minum', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_sumberair', array(	'0' => '<= PDAM', 
		        							   	'1' => 'Sumur Bor',
		        								'2' => 'Sumur Resapan',
		        								'3' => 'Sungai',
		        								'5' => 'Air Gunung',
		        								'6' => 'Mata Air',
				        						'4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_sumberair'))
		<span class="help-block">
			{{ $errors->first('id_sumberair') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Bantuan Pemerintah  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_bantuan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_bantuan', 'Bantuan Pemerintah', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_bantuan', array(	'0' => 'BPJS',
												'3' => 'Raskin', 
		        							   	'1' => 'BPJS+Raskin',
		        							   	'4' => 'Tidak Ada',
		        								'2' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_bantuan'))
		<span class="help-block">
			{{ $errors->first('id_bantuan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Kebiasaan Berobat  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_berobat') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_berobat', 'Kebiasaan Berobat', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_berobat', array(	'0' => 'Puskesmas', 
		        							   	'1' => 'Rumah Sakit Umum',
		        							   	'2' => 'Tradisional',
		        								'3' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_berobat'))
		<span class="help-block">
			{{ $errors->first('id_berobat') }}
		</span>
		{{-- expr --}}
	@endif
	</div>


{{-- Alat Penerangan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_penerangan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_penerangan', 'Penerangan yang digunakan', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('id_penerangan', '0') !!} Listrik</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('id_penerangan', '1') !!} Non Listrik</label>
        </div>
	</div>
	@if ($errors->has('id_penerangan'))
		<span class="help-block">
			{{ $errors->first('id_penerangan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Alat Memasak  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_memasak') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_memasak', 'Alat Memasak', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_memasak', array(	'0' => 'Gas 3 Kg', 
		        							   	'1' => 'Gas 5 Kg',
		        							   	'2' => 'Gas 12 Kg',
		        							   	'3' => 'Minyak Tanah',
		        							   	'4' => 'Listrik',
		        							   	'5' => 'Kayu/Tungku',
		        								'6' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_memasak'))
		<span class="help-block">
			{{ $errors->first('id_memasak') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Kepemilikan Ternak  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('ternak') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('ternak', 'Kepemilikan Ternak', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('ternak', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('ternak'))
		<span class="help-block">
			{{ $errors->first('ternak') }}
		</span>
	@endif
	</div>

{{-- Kendaraan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('kendaraan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('kendaraan', 'Kepemilikan Kendaraan', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('kendaraan', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('kendaraan'))
		<span class="help-block">
			{{ $errors->first('kendaraan') }}
		</span>
	@endif
	</div>

{{-- Kelainan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('kelainan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('kelainan', 'Kelainan Fisik', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('kelainan', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('kelainan'))
		<span class="help-block">
			{{ $errors->first('kelainan') }}
		</span>
	@endif
	</div>


{{-- Usaha Industri  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('usaha') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('usaha', 'Usaha Industri', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('usaha', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('usaha'))
		<span class="help-block">
			{{ $errors->first('usaha') }}
		</span>
	@endif
	</div>

{{-- Bangunan Rumah  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_bangunan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_bangunan', 'Bangunan', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_bangunan', array(	'0' => 'Permanen', 
		        							   	'1' => 'Semi Permanen',
		        							   	'2' => 'Kayu',
		        							   	'3' => 'Panggung',
		        							   	'4' => 'Tidak Ada',
		        								'5' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_bangunan'))
		<span class="help-block">
			{{ $errors->first('id_bangunan') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Jumalah Tanggungan  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('tanggungan') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('tanggungan', 'Jumlah Tanggungan', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('tanggungan', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('tanggungan'))
		<span class="help-block">
			{{ $errors->first('tanggungan') }}
		</span>
	@endif
	</div>


{{-- Kode Penduduk  --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_penduduk') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('id_penduduk', 'Kode Penduduk', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
		{!! Form::select('id_penduduk', array(	'0' => 'Penduduk Kelurahan Domisili di Kelurahan', 
		        							   	'1' => 'Penduduk Kelurahan Domisili diluar Kelurahan',
		        							   	'2' => 'Penduduk Kelurahan Domisili diluar Kecamatan',
		        							   	'3' => 'Penduduk Kelurahan Domisili diluar Kota',
		        								'4' => 'Lainnya'), null, ['class'=>'form-control form-control-sm rounded-0']) !!}
	</div>
	@if ($errors->has('id_penduduk'))
		<span class="help-block">
			{{ $errors->first('id_penduduk') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- SubmitButton --}}
<div class="form-group text-center">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary btn-sm form-pill']) !!}
</div>