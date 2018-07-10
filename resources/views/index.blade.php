@extends('layouts.itm')
@section('content')
    <head>
        <!--[if lt IE 9]>
        <script>window.onload = function () {
            alert("您的IE浏览器版本较低，系统已启用兼容模式 :)");
        }</script>
        <![endif]-->
    </head>

    <div class="jumbotron masthead">
        <div class="container">
            <h1>工业互联网平台</h1>
            <h2>正式有效 - 数据驱动 - 迭代演进</h2>
            {{--<p class="masthead-button-links">--}}
                {{--<a class="btn btn-lg btn-primary btn-shadow" href="#" role="button">主要资源（暂无）</a>--}}
            {{--</p>--}}
            {{--<ul class="masthead-links">--}}
                {{--<li><a href="#" role="button">其它资源（暂无）</a></li>--}}
            {{--</ul>--}}
        </div>
    </div>
    <div class="bc-social">
        <div class="container">
            <ul class="bc-social-buttons">
                <li class="social-forum">
                    <a class="" href="/check" title="线上点检"><i class="fa fa-check-circle"></i> 线上点检</a>
                </li>
                <li class="social-forum">
                    <a class="" href="/report" title="系统状态"><i class="fa fa-info-circle"></i> 系统状态</a>
                </li>
                <li class="social-forum">
                    <a class="" href="/excel" title="数据报表"><i class="fa fa-bar-chart"></i> 数据报表</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container projects">

        <div class="projects-header page-header">
            <h1></h1>
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/unslider/" title="Unslider" target="_blank">
                        <img class="lazy"
                             src="http://static.bootcss.com/www/assets/img/unslider.png"
                             width="300"
                             height="150"
                             data-src="http://static.bootcss.com/www/assets/img/unslider.png"
                             alt="Unslider"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/unslider/" title="Unslider" target="_blank">Unslider<br>
                                <small>jQuery轮播插件</small>
                            </a>
                        </h3>
                        <p>
                            Unslider — 一个超小的 jQuery 轮播（slider） 插件。支持主流浏览器、键盘导航、自动调整高度和响应式布局。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/flat-ui/" title="Flat UI" target="_blank">
                        <img class="lazy"
                             src="http://static.bootcss.com/www/assets/img/flat-ui.png"
                             width="300"
                             height="150"
                             data-src="http://static.bootcss.com/www/assets/img/flat-ui.png"
                             alt="Flat UI"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/flat-ui/" title="Flat UI" target="_blank">Flat UI<br>
                                <small>Metro风格的Bootstrap</small>
                            </a>
                        </h3>
                        <p>
                            Flat UI是基于Bootstrap做的Metro化改造，由<a href="http://designmodo.com/">Designmodo</a>提供。Flat
                            UI包含了很多Bootstrap提供的组件，但是外观更加漂亮。在此强烈推荐！
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/bootstrap-switch/" title="Bootstrap Switch" target="_blank">
                        <img class="lazy" src="http://static.bootcss.com/www/assets/img/bootstrap-switch.png"
                             width="300" height="150"
                             data-src="http://static.bootcss.com/www/assets/img/bootstrap-switch.png"
                             alt="Bootstrap Switch"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/bootstrap-switch/" title="Bootstrap Switch"
                               target="_blank">Bootstrap Switch<br>
                                <small>Bootstrap开关组件</small>
                            </a>
                        </h3>
                        <p>
                            Bootstrap Switch是对Bootstrap控件的扩充。基于选HTML中基本的选择框控件实现只有开和关两种状态的单选按钮。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/chart.js/" title="Chart.js" target="_blank">
                        <img class="lazy"
                             src="http://static.bootcss.com/www/assets/img/chart.js.png"
                             width="300"
                             height="150"
                             data-src="http://static.bootcss.com/www/assets/img/chart.js.png"
                             alt="Chart.js"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/chart.js/" title="Chart.js" target="_blank">Chart.js<br>
                                <small>精巧的JS图表绘制工具库</small>
                            </a>
                        </h3>
                        <p>
                            Chart.js是一个简单、面向对象、为设计者和开发者准备的图表绘制工具库。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/bootstrap-datetimepicker/" title="Bootstrap日期时间选择器"
                       target="_blank">
                        <img class="lazy"
                             src="http://static.bootcss.com/www/assets/img/bootstrap-datetimepicker.png"
                             width="300" height="150"
                             data-src="http://static.bootcss.com/www/assets/img/bootstrap-datetimepicker.png"
                             alt="Bootstrap Datetimepicker"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/bootstrap-datetimepicker/" title="Bootstrap日期时间选择器"
                               target="_blank"> DateTime Picker<br>
                                <small>日期时间选择器</small>
                            </a>
                        </h3>
                        <p>
                            Bootstrap日期时间选择器（Bootstrap DateTime Picker）是一个Bootstrap组件，能够简化页面上日期、时间的输入。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/font-awesome/" title="Font Awesome" target="_blank">
                        <img class="lazy" src="http://static.bootcss.com/www/assets/img/font-awesome.png" width="300"
                             height="150" data-src="http://static.bootcss.com/www/assets/img/font-awesome.png"
                             alt="Font Awesome"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/font-awesome/" title="Font Awesome" target="_blank">Font
                                Awesome <br>
                                <small>Bootstrap专用图标字体</small>
                            </a>
                        </h3>
                        <p>
                            Font Awesome 中包含的所有图标都是矢量的，也就可以任意缩放，避免了一个图标做多种尺寸的麻烦。CSS对字体可以设置的样式也同样能够运用到这些图标上了。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/websafecolors/" title="Web安全色" target="_blank">
                        <img class="lazy"
                             src="http://static.bootcss.com/www/assets/img/websafecolors.png"
                             width="300"
                             height="150"
                             data-src="http://static.bootcss.com/www/assets/img/websafecolors.png"
                             alt="Web-Safe Colors"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/websafecolors/" title="Web安全色" target="_blank">Web Safe
                                Colors<br>
                                <small>Web安全色</small>
                            </a>
                        </h3>
                        <p>
                            本表中列出的是WEB设计、开发中常用安全色。列于此是为了方便大家参考。
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="http://www.bootcss.com/p/git-guide/" title="Git简易指南" target="_blank">
                        <img class="lazy"
                             src="http://static.bootcss.com/www/assets/img/git-guide.png"
                             width="300"
                             height="150"
                             data-src="http://static.bootcss.com/www/assets/img/git-guide.png"
                             alt="Git Guide"></a>
                    <div class="caption">
                        <h3>
                            <a href="http://www.bootcss.com/p/git-guide/" title="git简易指南" target="_blank">Git Guide<br>
                                <small>Git简易指南</small>
                            </a>
                        </h3>
                        <p>
                            Git简易指南 -- 帮助你开始使用 git 的简易指南，木有高深内容，;)。
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection