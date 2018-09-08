@include('header')

<body class="fixed-nav">

@include('navbar')

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">

            <!--page title-->
            <div class="page-title mb-4 d-flex align-items-center">
                <div class="mr-auto">
                    <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Form Kelurahan</h4>
                    <nav aria-label="breadcrumb" class="d-inline-block ">
                        <ol class="breadcrumb p-0">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
                        </ol>
                    </nav>
                    @include('_partial.flash_message')
                </div>
            </div>
            <!--/page title-->

            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Form Kelurahan</div>
                            </div>
                        </div>
                        <div class="card-body">
                            {{-- Error Message --}}
                            @include('errors.form_error_list')
                            {!! Form::open(['url' => 'kelurahan']) !!}
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama Kelurahan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="kelurahan">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">Data Kelurahan</div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            
                            @if (!empty($kelurahan_list))

                            <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelurahan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 0;?>
                                <?php foreach ($kelurahan_list as $kelurahan): ?>
                                <?php $no++ ;?>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $kelurahan->kelurahan }}</td>
                                    <td>
                                        {{ link_to('kelurahan/' . $kelurahan->id_kelurahan . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm form-pill']) }}
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

