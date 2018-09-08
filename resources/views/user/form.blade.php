@if (isset($user))
	{!! Form::hidden('id', $user->id) !!}
@endif

{{-- Nama --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('name') ? 'has-error' : 'has-success' }}
	</div>

@else
	<div class="form-group row">
@endif
	{!! Form::label('name', 'Nama', ['class' => 'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
	{!! Form::text('name', null, ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('name'))
		<span class="help-block">
			{{ $errors->first('name') }}
		</span>
	@endif
	</div>

{{-- UserName --}}
@if ($errors->any())
	<div class="valid-feedback">
        	{{ $errors->first('username') }}
        </div>
@else
	<div class="form-group row">
@endif
	{!! Form::label('username', 'Username', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">	
	{!! Form::text('username', null, ['class'=>'form-control', 'id'=>'validationCustom01']) !!}
	</div>
	@if ($errors->has('username'))
		<div class="valid-feedback">
        	{{ $errors->first('username') }}
        </div>
		{{-- expr --}}
	@endif
	</div>

{{-- Level --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('level') ? 'has-error' : 'has-success' }}
	</div>
@else
	<div class="form-group row">
@endif
	{!! Form::label('level', 'Level', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">
        <div class='iCheck-flat-blue'>
        	<label>{!! Form::radio('level', 'admin') !!} Admin</label>
        </div>
		<div class="iCheck-flat-blue">
			<label>{!! Form::radio('level', 'operator') !!} Operator </label>
        </div>
	</div>
	@if ($errors->has('level'))
		<span class="help-block">
			{{ $errors->first('level') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Kelurahan --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('id_kelurahan') ? 'has-error' : 'has-success' }}
	</div>
@else
	<div class="form-group row">
@endif
	{!! Form::label('kelurahan', 'Kelurahan', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">	
		{{-- {!! Form::select('id_kelurahan', array('1' => 'Ada', '2' => 'Begu'), null) !!}
 --}}
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

{{-- Password --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('password') ? 'has-error' : 'has-success' }}
	</div>
@else
	<div class="form-group row">
@endif
	{!! Form::label('password', 'Password', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">	
	{!! Form::password('password', ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('password'))
		<span class="help-block">
			{{ $errors->first('password') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- Password Confirmation --}}
@if ($errors->any())
	<div class="form-group">
		{{ $errors->has('password_confirmation') ? 'has-error' : 'has-success' }}
	</div>
@else
	<div class="form-group row">
@endif
	{!! Form::label('password_confirmation', 'Password Confirmation', ['class'=>'col-sm-3 col-form-label']) !!}
	<div class="col-sm-9">	
	{!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
	</div>
	@if ($errors->has('password_confirmation'))
		<span class="help-block">
			{{ $errors->first('password_confirmation') }}
		</span>
		{{-- expr --}}
	@endif
	</div>

{{-- SubmitButton --}}
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary btn-sm form-pill']) !!}
</div>