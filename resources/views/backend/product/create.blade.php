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
        <!-- v4.1.3 -->
        <link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/favicon-16x16.png') }}">

        <!-- Google Font -->
        <link href="'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700'" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/et-line-font/et-line-font.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/simple-lineicon/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

        <!-- form wizard -->
        <link rel="stylesheet" href="{{ asset('dist/plugins/formwizard/jquery-steps.css') }}">

    </head>
@endsection


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black">Product Entry Form</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> <a href="#">Form</a></li>
            <li><i class="fa fa-angle-right"></i> Product Entry Form</li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline">
                    <div class="card-header bg-blue">
                        <h5 class="text-white m-b-0">Add Product</h5>
                    </div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div>
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <!-- Product Name -->
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="prod_name" 
                                    value="{{ old('prod_name') }}" 
                                    placeholder="Enter product name" 
                                    required 
                                    />
                            </div>

                            <!-- SKU -->
                            <div class="form-group">
                                <label for="SKU">SKU</label>
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    name="prod_sku" 
                                    value="{{ old('prod_sku') }}" 
                                    placeholder="Enter SKU" 
                                    required 
                                    />
                            </div>

                            <!-- Stock -->
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input 
                                    type="number" 
                                    class="form-control" 
                                    name="prod_stock" 
                                    value="{{ old('prod_stock') }}" 
                                    placeholder="Enter stock quantity" 
                                    min="0" 
                                    />
                            </div>

                            <!-- Details -->
                            <div class="form-group">
                                <label for="details">Details</label>
                                <textarea 
                                    class="form-control" 
                                    name="prod_details" 
                                    placeholder="Enter product details"
                                    required >
                                    {{ old('prod_details') }}
                                </textarea>
                            </div>

                            <!-- Price -->
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input 
                                    type="number" 
                                    step="0.01" 
                                    class="form-control" 
                                    name="prod_price" 
                                    value="{{ old('prod_price') }}" 
                                    placeholder="Enter product price" 
                                    required 
                                    />
                            </div>

                            <!-- Category -->
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="prod_category" id="prod_category" class="form-control" >
                                    <option value="" selected >Select Category</option>
                                    @foreach ($cat as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                
                                </select>
                            </div>

                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Product Image</label>
                                <input 
                                    type="file" 
                                    class="form-control" 
                                    name="prod_image" 
                                    accept="image/*"/>
                            </div>

                            <button type="submit" class="btn btn-success">
                                Submit
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>

@endsection

@section('scripts')
    <!-- jQuery 3 -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- template -->
    <script src="{{ asset('dist/js/bizadmin.js') }}"></script>

    <!-- for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>

    <!-- form wizard -->
    <script src="{{ asset('dist/plugins/formwizard/jquery-steps.js') }}"></script>
    <script src="'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js'">
    </script>
    <script>
        var frmRes = $('#frmRes');
        var frmResValidator = frmRes.validate();

        var frmInfo = $('#frmInfo');
        var frmInfoValidator = frmInfo.validate();

        var frmLogin = $('#frmLogin');
        var frmLoginValidator = frmLogin.validate();

        var frmMobile = $('#frmMobile');
        var frmMobileValidator = frmMobile.validate();

        $('#demo1').steps({
            onChange: function (currentIndex, newIndex, stepDirection) {
                console.log('onChange', currentIndex, newIndex, stepDirection);
                // tab1
                if (currentIndex === 0) {
                    if (stepDirection === 'forward') {
                        var valid = frmRes.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmResValidator.resetForm();
                    }
                }

                // tab2
                if (currentIndex === 1) {
                    if (stepDirection === 'forward') {
                        var valid = frmInfo.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmInfoValidator.resetForm();
                    }
                }

                // tab3
                if (currentIndex === 2) {
                    if (stepDirection === 'forward') {
                        var valid = frmLogin.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmLoginValidator.resetForm();
                    }
                }

                // tab4
                if (currentIndex === 3) {
                    if (stepDirection === 'forward') {
                        var valid = frmMobile.valid();
                        return valid;
                    }
                    if (stepDirection === 'backward') {
                        frmMobileValidator.resetForm();
                    }
                }

                return true;

            },
            onFinish: function () {
                alert('Wizard Completed');
            }
        });
    </script>
    <script>
        $('#demo').steps({
            onFinish: function () {
                alert('Wizard Completed');
            }
        });
    </script>
    <!--End of Tawk.to Script-->
@endsection