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
                                <a href="warga/createkk" class="btn btn-primary btn-sm form-pill">Tambah Data KK </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        
                        {{-- @include('_partial.flash_message') --}}
                        
                        @if (count($kepalakeluarga_list)>0)
                            {{-- expr --}}
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kep. Keluarga</th>
                                <th>Nomor KK</th>
                                <th>Alamat</th>
                                <th>Kelurahan</th>
                                <th>Lingkungan</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                            <?php foreach ($kepalakeluarga_list as $kepalakeluarga): ?>
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $kepalakeluarga->warga->nama }}</td>
                                <td>{{ $kepalakeluarga->nokk }}</td>
                                <td>{{ $kepalakeluarga->alamat }}</td>
                                <td>{{ $kepalakeluarga->kelurahan->kelurahan }}</td>
                                <td>{{ $kepalakeluarga->lingkungan }}</td>
                                <td>
                                    {{ link_to('warga/' . $kepalakeluarga->id_warga . '/anggotakeluarga', 'Insert', ['class' => 'btn btn-primary btn-sm form-pill']) }}
                                    {{-- {{ link_to('user/' . $kepalakeluarga->id_warga . '/view', 'View', ['class' => 'btn btn-success btn-sm form-pill']) }}
                                     --}}
                                     {{-- {{ link_to('warga/' . $kepalakeluarga->id_warga . '/editkk', 'Edit', ['class' => 'btn btn-warning btn-sm form-pill']) }} --}}
                                    {{-- {{ link_to('user/' . $kepalakeluarga->id_warga . '/hapus', 'Hapus', ['class' => 'btn btn-danger btn-sm form-pill']) }} --}}
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

