<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rain">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="#">

    <title>Login</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!--icon font-->
    <link href="{{ asset ('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/dashlab-icon/dashlab-icon.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/themify-icons/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset ('assets/vendor/weather-icons/css/weather-icons.min.css') }}" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="{{ asset ('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="{{ asset ('assets/vendor/jquery-dropdown-master/jquery.dropdown.css') }}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{ asset ('assets/vendor/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{ asset ('assets/vendor/icheck/skins/all.css') }}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{ asset ('assets/css/main.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115474794-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115474794-1');
    </script>

</head>

<body class="login-bg">

    <div class="container">
        <div class="row">
            <div class="col-xl-12 d-lg-flex align-items-center">
                <!--login form-->
                <div class="login-form">
                    <h4 class="text-uppercase text-purple text-center mb-5">Login</h4>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <input id="username" type="text" class="form-control" name="username" placeholder="User Name" value="{{ old('username') }}">
                            @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                        </div>
                        
                        <div class="form-group mb-4{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        <div class="form-group clearfix">
                            <a href="#" class="float-left forgot-link my-2">Forgot Password ?</a>
                            <button type="submit" class="btn btn-purple float-right">LOGIN</button>
                        </div>
                    </form>
                </div>
                <!--login promo-->
                <div class="login-promo basic-gradient  text-white position-relative">
                    <div class="login-promo-content text-center">
                        <a href="#" class="mb-4 d-block">
                            <img class="pr-3" src="assets/img/logo-icon.png" srcset="assets/img/logo-icon@2x.png 2x" alt="">
                            <span class="text-uppercase weight800 text-white f18">dashlab</span>
                        </a>
                        <h1 class="text-white">Let’s Start The Journey</h1>
                        <p>Enter the most beautiful admin ever</p>
                        <a href="#" class="play-btn mt-4"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!--/login promo-->
            
            </div>
        </div>
    </div>

    <!--basic scripts-->
    <script src="{{ asset ('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/popper.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/jquery-dropdown-master/jquery.dropdown.js') }}"></script>
    <script src="{{ asset ('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset ('assets/vendor/icheck/skins/icheck.min.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="{{ asset ('assets/js/scripts.js') }}"></script>
</body>

</html>