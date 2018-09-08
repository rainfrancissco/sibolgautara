@include('header')

<body class="fixed-nav">

@include('navbar')

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
                                {{ link_to('warga/' . $IdKepalaKeluarga . '/createwarga', 'Tambah Anggota Keluarga', ['class' => 'btn btn-primary btn-sm form-pill']) }}
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        
                        {{-- @include('_partial.flash_message') --}}
                        
                        @if (count($Qwarga)>0)
                            {{-- expr --}}
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
                                {{-- foreach ($Qwarga as $anggotakeluarga_list) {
                                    echo $anggotakeluarga->nama;
                                } --}}
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $anggotakeluarga->nama }}</td>
                                <td>{{ $anggotakeluarga->hubungan }}
                                </td>
                                <td>
                                    {{ link_to('warga/' . $anggotakeluarga->WargaId . '/editwarga', 'Edit', ['class' => 'btn btn-primary btn-sm form-pill']) }}
                                    {!! Form::open(['method'=>'DELETE', 'action'=>['WargaController@deletewarga', $anggotakeluarga->WargaId ]]) !!}
                                    {!! Form::submit('Delete',  ['class' => 'btn btn-danger btn-sm form-pill']) !!}
                                    {!! Form::close() !!}
                                    {{-- {{ link_to('warga/' . $anggotakeluarga->WargaId . '/deletewarga', 'Delete', ['class' => 'btn btn-danger btn-sm form-pill']) }} --}}
                                </td>
                            </tr>

                            <?php endforeach ?>
                            
                            </tbody>
                        </table>
                            
                        @else <p> Data Kosong </p>

                        @endif

                    </div>
                </div>
            </div>

@include('footer')

