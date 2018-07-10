<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IT运维监控系统</title>

    <!--
    * ━━━━━━━━━━━━━━
    * 　　　┏┓　　　┏┓
    * 　　┏┛┻━━━┛┻┓
    * 　　┃　　　　　　　┃
    * 　　┃　　　━　　　┃
    * 　　┃　┳┛　┗┳　┃
    * 　　┃　　　　　　　┃
    * 　　┃　　　┻　　　┃
    * 　　┃　　　　　　　┃
    * 　　┗━┓　　　┏━┛  Don't be like this!
    * 　　　　┃　　　┃
    * 　　　　┃　　　┃
    * 　　　　┃　　　┗━━━┓
    * 　　　　┃　　　　　　　┣┓
    * 　　　　┃　　　　　　　┏┛
    * 　　　　┗┓┓┏━┳┓┏┛
    * 　　　　　┃┫┫　┃┫┫
    * 　　　　　┗┻┛　┗┻┛
    * ━━━━━━━━━━━━━━
    -->

    <!-- Styles -->
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    {{--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    {{--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/footer.css') }}">
    <!--[if lt IE 9]>
    <script src="/bootstrap/js/ie9/html5shiv.min.js"></script>
    <script src="/bootstrap/js/ie9/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            font-family: "lucida grande", "lucida sans unicode", lucida, helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">IT运维监控系统</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li id="tab_2"><a href="{{ url('/welcome') }}">原系统首页</a></li>
                <li id="tab_1"><a href="{{ url('/checklist') }}">系统巡检</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">登录</a></li>
                    {{--<li><a href="{{ url('/register') }}">注册</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-menu-hamburger"
                                  aria-hidden="true"></span> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/admin') }}"><i class="fa fa-btn"></i><span
                                            class="glyphicon glyphicon-cog" aria-hidden="true"></span> 控制台</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn"></i><span
                                            class="glyphicon glyphicon-log-out" aria-hidden="true"></span> 退出</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<!-- JavaScripts -->
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
{{--<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
{{--<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
