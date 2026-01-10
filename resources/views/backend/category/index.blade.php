@extends('backend.layout.default')

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
        <!-- v4.0.0 -->
        <link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/favicon-16x16.png')}}">

        <!-- Google Font -->
        <link rel="stylesheet" href="'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700'">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/simple-lineicon/simple-line-icons.css')}}">
        <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

        <!-- jsgrid Tables -->
        <link type="text/css" rel="stylesheet" href="{{asset('dist/plugins/jsgrid/jsgrid.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{asset('dist/plugins/jsgrid/theme.css')}}" />
    </head>
@endsection


@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Js Grid Table</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Tables</a></li>
                <li><i class="fa fa-angle-right"></i> Js Grid Table</li>
            </ol>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="card m-b-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-black mb-0">Static Data</h4>
                        <a href="{{ url('category/create') }}" class="btn btn-primary fw-semibold">
                            <i class="bi bi-plus-circle me-1"></i> Add Category
                        </a>
                    </div>

                    @session('success')
                        <div class="alert alert-success">{{ session('success') }}</div>

                    @endsession

                    <table class="table table-bordered table-striped table-hover text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cats as $category)
                                <tr>
                                    <form method="post" action="{{ route('category.destroy', $category->id) }}">
                                        @csrf
                                        @method('delete')
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('category.edit', $category->id) }}"><i
                                                    class="bi bi-pencil-square"></i> Edit</a>
                                            <button class="btn btn-danger btn-sm">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- jQuery 3 -->
    <script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('dist/plugins/popper/popper.min.js')}}"></script>
    <script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- template -->
    <script src="{{asset('dist/js/bizadmin.js')}}"></script>

    <!-- for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>

    <!-- jsgrid Tables -->
    <script src="{{asset('dist/plugins/jsgrid/db.js')}}"></script>
    <script src="{{asset('dist/plugins/jsgrid/jsgrid.min.js')}}"></script>
    <script src="{{asset('dist/plugins/jsgrid/jsgrid.int.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection