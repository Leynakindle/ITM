@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>数据报表</h1>
            <p class="lead">支持按需查询与导出</p>
        </div>
    </header>

    <div class="container projects">
        <div class="row">

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/excel/dept02" title="人力资源部">
                        <img class="lazy"
                             src="/img/excel/dept02.jpg"
                             width="300"
                             height="150"
                             data-src="/img/excel/dept02.jpg"
                             alt="人力资源部"></a>
                    <div class="caption">
                        <h3>
                            <a href="/excel/dept02" title="人力资源部">人力资源部<br>
                                <small>Human Resource Department</small>
                            </a>
                        </h3>
                        <p>
                            KBU：吴巧莲
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/excel/dept04" title="生产管理部">
                        <img class="lazy"
                             src="/img/excel/dept04.jpg"
                             width="300"
                             height="150"
                             data-src="/img/excel/dept04.jpg"
                             alt="生产管理部"></a>
                    <div class="caption">
                        <h3>
                            <a href="/excel/dept04" title="生产管理部">生产管理部<br>
                                <small>Production Management Department</small>
                            </a>
                        </h3>
                        <p>
                            KBU：荆江
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/excel/dept05" title="质量部">
                        <img class="lazy"
                             src="/img/excel/dept05.jpg"
                             width="300"
                             height="150"
                             data-src="/img/excel/dept05.jpg"
                             alt="质量部"></a>
                    <div class="caption">
                        <h3>
                            <a href="/excel/dept05" title="质量部">质量部<br>
                                <small>Quality Department</small>
                            </a>
                        </h3>
                        <p>
                            KBU：王龙云
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        window.onload = function () {
            document.getElementById("excel").className = "active";
        }
    </script>
@endsection