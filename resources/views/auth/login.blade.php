<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sass Project</title>
    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sass Admin Dashboard Bootstrap 4 Based Dashboard" />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="uxliner" />
    <!-- v4.1.3 -->
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

    <style>
        body.login-page {
            background: url('{{ asset('dist/images/Login_Background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
        }

        .login-box {
            background: rgba(255, 255, 255, 0.9);
            /* slightly transparent white */
            padding: 30px;
            border-radius: 10px;
        }
    </style>


</head>

<body class="login-page">
    <div class="login-box">

        {{-- Login --}}
        <div>

            {{-- Form --}}
            <form action="{{ route('login') }}" method="post" class="p-4">
                @csrf

                <h3 class="text-center mb-4 font-weight-bold">Sign In</h3>

                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                            required autofocus>
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Password" required>
                    </div>
                </div>

                <!-- Remember & Forgot -->
                <div class="form-group d-flex justify-content-between align-items-center">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember Me</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-small">Forgot Password?</a>
                </div>

                <!-- Sign In Button -->
                <button type="submit" class="btn btn-primary btn-block btn-lg" id="loginBtn">
                    <span id="btnText">Sign In</span>
                    <span id="btnSpinner" class="spinner-border spinner-border-sm d-none ml-2" role="status"
                        aria-hidden="true"></span>
                </button>

                <!-- Register Link -->
                <p class="text-center mt-3">Don't have an account? <a href="{{ route('register') }}">Sign Up</a></p>
            </form>


            <div class="m-t-2">Don't have an account? <a href="register" class="text-center">Sign Up</a>
            </div>
        </div>

    </div>


    <!-- jQuery 3 -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>

    <!-- template -->
    <script src="dist/js/bizadmin.js"></script>


</body>

</html>
