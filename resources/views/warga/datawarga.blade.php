{{-- Form Data Warga --}}

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
                                <a href="warga/createkk" class="btn btn-primary btn-sm form-pill">Tambah Data </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        
                        {{-- @include('_partial.flash_message') --}}
                        
                        @if (count($warga_list)>0)
                            {{-- expr --}}
                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Warga</th>
                                <th>J Kelamin</th>
                                <th>Hubungan Keluarga</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Mata Pencaharian</th>
                                <th>Akte Lahir</th>
                                <th>Action</th>
                                {{-- Data Jangan Ditampilkan semua, akan menjadi berat dan sembraut --}}
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0;?>
                            <?php foreach ($warga_list as $warga): ?>
                            <?php $no++ ;?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $kepalakeluarga->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->level }}</td>
                                <td>
                                    {{ link_to('user/' . $user->id . '/lihatwarga', 'Lihat', ['class' => 'btn btn-warning btn-sm form-pill']) }}
                                    {{ link_to('user/' . $user->id . '/hapuswarga', 'Hapus', ['class' => 'btn btn-danger btn-sm form-pill']) }}
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

