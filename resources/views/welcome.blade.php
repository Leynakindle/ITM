@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default">
                    <div class="panel-heading">声明</div>
                    <div class="panel-body">
                        <ul>
                            <li>本系统仅供北汽镇江公司信息技术科使用</li>
                            <li>浏览器优先级：Chrome > Firefox > IE9</li>
                            <li>有问题? <a href="mailto:lengjichao@baicvbu.com">请点此联系开发者</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">关于</div>
                    <div class="panel-body">
                        <ul>
                            <li>版本控制：<a href="https://github.com/" target="_blank">GitHub</a></li>
                            <li>前端框架：<a href="http://www.bootcss.com/" target="_blank">Bootstrap</a></li>
                            <li>后端框架：<a href="https://laravel.com/" target="_blank">Laravel</a></li>
                            <li>依赖管理：<a href="http://www.phpcomposer.com/" target="_blank">Composer</a></li>
                            <li>编程语言：<a href="http://php.net/" target="_blank">PHP</a></li>
                            <li>Web Server：<a href="http://httpd.apache.org/" target="_blank">Apache</a></li>
                            <li>Database：<a href="https://mariadb.com/" target="_blank">MariaDB</a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">历史</div>
                    <div class="panel-body">
                        <ul>
                            <li>[2016/08/18] - Version 0.05</li>
                            <li>
                                <ol>
                                    <li>[Upd] 显示样式调整</li>
                                    <li>[Add] 页脚</li>
                                    <li>[Add] icon</li>
                                </ol>
                            </li>
                            <li></li>
                            <li>[2016/08/12] - Version 0.04</li>
                            <li>
                                <ol>
                                    <li>[Upd] 巡检目录删除确认</li>
                                </ol>
                            </li>
                            <li></li>
                            <li>[2016/08/11] - Version 0.03</li>
                            <li>
                                <ol>
                                    <li>[Add] 巡检目录编辑</li>
                                </ol>
                            </li>
                            <li></li>
                            <li>[2016/08/09] - Version 0.02</li>
                            <li>
                                <ol>
                                    <li>[Upd] 字体调整</li>
                                    <li>[Add] Glyphicons字体图标</li>
                                </ol>
                            </li>
                            <li></li>
                            <li>[2016/08/04] - Version 0.01</li>
                            <li>
                                <ol>
                                    <li>[Add] 用户注册登录</li>
                                    <li>[Add] 巡检目录展示</li>
                                    <li>[Add] 巡检目录新增</li>
                                    <li>[Add] 巡检目录删除</li>
                                </ol>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            document.getElementById("tab_2").className = "active";
        }
    </script>

    <footer class="blog-footer">
        <p>北汽(镇江)汽车有限公司 - <a href="{{ url('/welcome') }}">IT内控平台</a></p>
        <p><a href="#"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> 回到顶部</a></p>
    </footer>
@endsection
