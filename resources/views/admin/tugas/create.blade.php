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
                                <strong class="card-title">Credit Card</strong>
                            </div>
                            <div class="card-body card-block">
            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
           
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Nama Tugas</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Nama Tugas" class="form-control" /><small class="form-text text-muted">This is a help nama tugas</small></div>
                </div>
                
           
                <div class="row form-group">
                    <div class="col col-md-3"><label for="selectSm" class="form-control-label">Kategori Tugas</label></div>
                    <div class="col-12 col-md-9">
                        <select name="selectSm" id="SelectLm" class="form-control-sm form-control">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class="form-control-label">Keterangan Tugas</label></div>
                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Keterangan Tugas" class="form-control" /><small class="form-text text-muted">This is a help keterangan tugas</small></div>
                </div>
       
                <div class="row form-group">
                    <div class="col col-md-3"><label class="form-control-label">Status Tugas</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label"> <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input" />One </label>
                            <label for="inline-radio2" class="form-check-label"> <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input" />Two </label>
                            <label for="inline-radio3" class="form-check-label"> <input type="radio" id="inline-radio3" name="inline-radios" value="option3" class="form-check-input" />Three </label>
                        </div>
                    </div>
                </div>
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