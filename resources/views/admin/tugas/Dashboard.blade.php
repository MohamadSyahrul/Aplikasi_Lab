@extends('admin.index')

@section('content')

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

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
                            <li><a href="#">Table</a></li>
                            <li class="active">Data Tugas</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Tugas</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Tugas</th>
                                            <th>Id Kategori</th>
                                            <th>Keterangan Tugas</th>
                                            <th>Status Tugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i=>$row)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$row->Nama_tugas}}</td>
                                                <td>{{$row->id_kategori}}</td>
                                                <td>{{$row->Ket_tugas}}</td>
                                                <td>{{$row->Status_tugas}}</td>
                                            </tr>
                                        @endforeach

                                        <!-- <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                        </tr> -->
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <script src="{{ asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/main.js')}}"></script>


        <script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('admin/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>


@endsection