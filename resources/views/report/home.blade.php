@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>系统状态</h1>
            <p class="lead">用于监控各系统实时信息</p>
        </div>
    </header>

    <div class="container projects">
        <div class="row">

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/report/mes" title="MES">
                        <img class="lazy"
                             src="/img/report/mes.jpg"
                             width="300"
                             height="150"
                             data-src="/img/report/mes.jpg"
                             alt="MES"></a>
                    <div class="caption">
                        <h3>
                            <a href="/report/mes" title="MES">MES<br>
                                <small>制造执行系统</small>
                            </a>
                        </h3>
                        <p>
                            Admin：秦涛
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/report/wms" title="WMS">
                        <img class="lazy"
                             src="/img/report/wms.jpg"
                             width="300"
                             height="150"
                             data-src="/img/report/wms.jpg"
                             alt="WMS"></a>
                    <div class="caption">
                        <h3>
                            <a href="/report/wms" title="WMS">WMS<br>
                                <small>仓库管理系统</small>
                            </a>
                        </h3>
                        <p>
                            Admin：周谨
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="thumbnail" style="height: 336px;">
                    <a href="/report/cer" title="CER">
                        <img class="lazy"
                             src="/img/report/cer.jpg"
                             width="300"
                             height="150"
                             data-src="/img/report/cer.jpg"
                             alt="CER"></a>
                    <div class="caption">
                        <h3>
                            <a href="/report/cer" title="CER">CER<br>
                                <small>整车档案系统</small>
                            </a>
                        </h3>
                        <p>
                            Admin：马伟伟
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        window.onload = function () {
            document.getElementById("report").className = "active";
        }
    </script>
@endsection