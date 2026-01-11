@extends('manager.layout.default')

@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
        <!-- Tell the browser to be responsive to screen width -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
            content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
        <meta name="keywords"
            content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
        <meta name="author" content="uxliner" />
        <!-- v4.1.3 -->
        <link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/favicon-16x16.png') }}">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/et-line-font/et-line-font.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/simple-lineicon/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">


    </head>
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Dashboard Manager</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> Manager Dashboard</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-4 col-md-6 m-b-3">
                    <div class="widget-info bg-primary">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-white">
                                    <p>Total Balance</p>
                                    <h2 class="font-weight-bold">$15,859</h2>
                                    <a href="#">View Statement</a>
                                </div>
                                <div class="col-md-6 m-t-2 text-right"> <span id="spa-bar"></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-b-3">
                    <div class="widget-info bg-aqua">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-white">
                                    <p>Online Revenue</p>
                                    <h2 class="font-weight-bold">$8,859</h2>
                                    <a href="#">View Statement</a>
                                </div>
                                <div class="col-md-6 m-t-2 text-right"> <span id="spa-line"></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 m-b-3">
                    <div class="widget-info bg-danger">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-white">
                                    <p>Total Profit</p>
                                    <h2 class="font-weight-bold">$85,085</h2>
                                    <a href="#">View Statement</a>
                                </div>
                                <div class="col-md-6 m-t-2 text-right"> <span id="spa-pie"></span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="text-center font-bold">
            <h4>Welcome New User</h4>
        </div>

    </div>
@endsection

@section('scripts')
    <!-- jQuery 3 -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- template -->
    <script src="{{ asset('dist/js/bizadmin.js') }}"></script>

    <!-- JQuery Spark lines -->
    <script src="{{ asset('dist/plugins/jquery-sparklines/sparkline-int.js') }}"></script>
    <script src="{{ asset('dist/plugins/jquery-sparklines/jquery.sparkline.min.js') }}"></script>

    <!-- Morris JavaScript -->
    <script src="{{ asset('dist/plugins/morris/morris.js') }}"></script>
    <script src="{{ asset('dist/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('dist/plugins/functions/dashboard1.js') }}"></script>
@endsection