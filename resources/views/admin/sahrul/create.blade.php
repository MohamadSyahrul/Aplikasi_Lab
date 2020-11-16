@extends('admin.index')

@section('content')

<link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">{{$pagename}}</strong>
                            </div>
                            <div class="card-body card-block">
            <form action="{{ route('sahrul.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class="form-control-label">No Soal</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="textNIK" placeholder="No Soal" class="form-control" /></div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Pertanyaan</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="Nama_karyawan" placeholder="Pertanyaan" class="form-control" /><small class="form-text text-muted">This is a help Pertanyaan</small></div>
                </div>
                
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Jawaban</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="Jabatan_karyawan" placeholder="Jawaban" class="form-control" /><small class="form-text text-muted">This is a help Jawaban</small></div>
                </div>
                
                
                {{-- <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Sahrul Tugas</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="sahrulTugas_tugas" placeholder="sahrul" class="form-control" /><small class="form-text text-muted">This is a help keterangan tugas</small></div>
                </div> --}}
        <!-- <div class="card-footer"> -->
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
        <!-- </div> -->
    </div>
    <!-- <div class="card">
        <div class="card-header"><strong>Inline</strong> Form</div>
        <div class="card-body card-block">
            <form action="" method="post" class="form-inline">
                <div class="form-group"><label for="exampleInputName2" class="pr-1 form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control" /></div>
                <div class="form-group"><label for="exampleInputEmail2" class="px-1 form-control-label">Email</label><input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control" /></div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit</button>
            <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
        </div>
    </div> -->
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->

                  

                                    <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
                            <script src="{{ asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

                            <script src="{{ asset('admin/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
                            <script src="{{ asset('admin/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

                            <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                            <script src="{{ asset('admin/assets/js/main.js')}}"></script>
@endsection