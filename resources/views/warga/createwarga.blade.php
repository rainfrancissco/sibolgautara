@include('header')

<body class="fixed-nav">

@include('navbar')

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

            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title"> Tambah Anggota Keluarga</div>
                            </div>
                        </div>
                        <div class="card-body">
				            <div class="col-xl-12 col-md-12">
				                {!! Form::open(['url' => 'simpanwarga']) !!}
                    				@include('warga.formwarga', ['submitButtonText' => 'Simpan Data'])
                				{!! Form::close() !!} 
				                {!! Form::close() !!}              
				            </div>
                    </div>
                </div>
            </div>


@include('footer')

