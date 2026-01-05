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
        <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/style.css">
        <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
        <link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
        <link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- jsgrid Tables -->
        <link type="text/css" rel="stylesheet" href="dist/plugins/jsgrid/jsgrid.css" />
        <link type="text/css" rel="stylesheet" href="dist/plugins/jsgrid/theme.css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                                              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                                              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                            <![endif]-->

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
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ url('category/' . $category->id . '/edit') }}"
                                            class="btn btn-primary btn-sm">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <a href="{{ url('category/' . $category->id . '/delete') }}"
                                            class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Delete
                                        </a>
                                    </td>
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
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/plugins/popper/popper.min.js"></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- template -->
    <script src="dist/js/bizadmin.js"></script>

    <!-- for demo purposes -->
    <script src="dist/js/demo.js"></script>

    <!-- jsgrid Tables -->
    <script src="dist/plugins/jsgrid/db.js"></script>
    <script src="dist/plugins/jsgrid/jsgrid.min.js"></script>
    <script src="dist/plugins/jsgrid/jsgrid.int.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
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
