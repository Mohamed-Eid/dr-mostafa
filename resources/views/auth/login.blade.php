<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>تسجيل الدخول</title>
    <!-- Favicon-->
    <link rel="icon" href="Assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href=" {{ asset('Assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('Assets/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('Assets/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('Assets/css/style-ar.min.css') }}" rel="stylesheet">
</head>

<body class="login-page" style="overflow: hidden;
    background-image: url('{{ asset('Assets/images/bg.jpg') }}');
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;">
    <div class="login-box">
       
        <div class="card">
            <div class="body">
                <div class="logo">
                    <a href="javascript:void(0);">
                        <img src="{{ asset('Assets/images/logo.png') }}" alt="إسم النظام">
                    </a>
                    <h4 class="col-blue-grey text-center">إسم الشركة </h4>
                </div>
                <form id="sign_in" method="POST" action="{{ route('dashboard.login') }}" class="p-t-20 p-r-30 p-l-30">
                    @include('partials._errors')
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">mail</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="البريد الإلكتروني" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">تذكرني</label>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <button class="btn btn-block bg-green " type="submit">دخول</button>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forget-password.html" class="btn btn-block bg-cyan waves-effect ">هل نسيت كلمة المرور !</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('Assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('Assets/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('Assets/plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ asset('Assets/plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('Assets/js/admin.js') }}"></script>
    <script src="{{ asset('Assets/js/pages/examples/sign-in.js') }}"></script>
</body>

</html>