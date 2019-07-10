<!DOCTYPE html>
<html lang="en">
<head>
    <title>洪泽分局交通违法录入平台</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>
    <!-- Google analytics script-->
</head>
<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h1>洪泽分局交通违法录入平台</h1>
    </div>
    <div class="login-box">
        @include('shared._errors')
        <form class="login-form" action="{{ route('login') }}" method="POST">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>登录</h3>
            <div class="form-group">
                <label class="control-label">用户名</label>
                <input class="form-control" type="text" placeholder="用户名" autofocus>
            </div>
            <div class="form-group">
                <label class="control-label">密码</label>
                <input class="form-control" type="password" placeholder="密码">
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input type="checkbox"><span class="label-text">记住我</span>
                        </label>
                    </div>
                    <p class="semibold-text mb-2"><a href="#" data-toggle="flip">忘记密码 ?</a></p>
                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>登录</button>
            </div>
        </form>
    </div>
</section>s
</body>
</html>s