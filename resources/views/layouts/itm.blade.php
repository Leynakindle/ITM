<!DOCTYPE html>
<html lang="zh-CN">
<head>
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

    <meta charset="utf-8">
    <title>工业互联网平台</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IT运维监控系统的描述">
    <meta name="keywords" content="IT运维监控系统的关键词">
    <meta name="author" content="IT运维监控系统的作者">

    <!-- Site CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="/bootstrap/css/site.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/bootstrap/js/ie9/html5shiv.min.js"></script>
    <script src="/bootstrap/js/ie9/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Heiti SC", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
        }
    </style>

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">工业互联网平台</a>
        </div>

        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav">
                {{--<li><a href="/welcome">原控制台(临时)</a></li>--}}
                <li id="check"><a href="/check">线上点检</a></li>
                <li id="report"><a href="/report">系统状态</a></li>
                {{--<li id="report" class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">系统状态 <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="/report">全部</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li class="dropdown-header">生产系统</li>--}}
                {{--<li><a href="/report/mes">MES</a></li>--}}
                {{--<li><a href="/report/wms">WMS</a></li>--}}
                {{--<li><a href="/report/cer">CER</a></li>--}}
                {{--<li class="dropdown-header">基础设施</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li id="excel"><a href="/excel">数据报表</a></li>
                {{--<li id="excel" class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">数据报表 <span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="/excel">全部</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a href="/excel/dept04">生产管理部</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    {{--<li data-toggle="modal" data-target="#myModal"><a href="#">登录</a></li>--}}
                    <div style="margin-top: 5px;margin-left: 15px">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">登录
                        </button>
                    </div>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }} <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/admin">控制台</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout">退出</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">登录</h4>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" role="form" method="POST" action="/login">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">邮箱</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">密码</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">
                            @if ($errors->has('password'))
                                <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember">记住我</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">提交</button>
                            <a class="btn btn-link" href="/password/reset">忘记密码?</a>
                        </div>
                    </div>
                </form>

            </div>
            {{--<div class="modal-footer">--}}
            {{--<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>--}}
            {{--<button type="button" class="btn btn-primary">提交</button>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="row footer-top">

            <div class="col-sm-9">
                <h4>
                    <img src="/img/footer_icon.png"/>
                </h4>
                <p>本系统由<b>北汽(镇江)汽车有限公司</b>发布并负责解释。</p>
            </div>

            <div class="col-sm-3 hidden-xs">
                <div class="row about">
                    <div class="col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-3">
                        <h4>关于</h4>
                        <ul class="list-unstyled">
                            <li><a href="/about#">简介</a></li>
                            <li><a href="/about#toc1">发展方向</a></li>
                            <li><a href="/about#toc2">联系作者</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col-md-4">
                        <h4>致谢</h4>
                        <ul class="list-unstyled">
                            <li><a href="/about/thx#">开源项目</a></li>
                            <li><a href="/about/thx#toc1">名人堂</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <hr/>

        <div class="row footer-bottom">
            <ul class="list-inline text-center">
                <li>©2018 BAIC ZHENJIANG</li>
                <li><a href="http://www.miibeian.gov.cn/" target="_blank">苏ICP备66666666号</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/bootstrap/js/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/jquery.unveil.min.js"></script>
<script src="/bootstrap/js/jquery.scrollUp.min.js"></script>
<script src="/bootstrap/js/toc.min.js"></script>
<script src="/bootstrap/js/jquery.matchHeight-min.js"></script>
<script src="/bootstrap/js/site.min.js"></script>

</body>
</html>
