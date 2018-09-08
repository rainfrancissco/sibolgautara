@include('header')

<body class="fixed-nav">

@include('navbar')

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
                                {!! Form::model($KepalaKeluarga, ['method' => 'PATCH', 'action' => ['KepalaKeluargaController@updatekk', $KepalaKeluarga->id_warga]]) !!}

                                    {!! Form::hidden('id_warga', $KepalaKeluarga->id_warga) !!}
                                    
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
                                            {!! Form::select('lingkungan', array(   'I' => 'I', 
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

                                        {{-- SubmitButton --}}
                                        <div class="form-group text-center">
                                        {!! Form::submit('Update Data', ['class' => 'btn btn-primary btn-sm form-pill']) !!}
                                        </div>
                                {!! Form::close() !!}
				            </div>
                    </div>
                </div>
            </div>


@include('footer')

