@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>生产管理部</h1>
            <p class="lead">Production Management Department</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/excel/dept04" class="list-group-item active">总览</a>
                    <a href="/excel/dept04/yscjdgk" class="list-group-item">月生产进度管控报表</a>
                    <a href="/excel/dept04/yscjdgk2" class="list-group-item">月生产进度明细报表-车型</a>
                    <a href="/excel/dept04/yscjdgk3" class="list-group-item">月生产进度明细报表-日期</a>
                    <a href="/excel/dept04/zzclmx" class="list-group-item">在制车辆明细报表</a>
                    <a href="/excel/dept04/zzcltjhz" class="list-group-item">在制车辆统计汇总报表</a>
                    <a href="/excel/dept04/zzcltjmx" class="list-group-item">在制车辆统计明细报表</a>
                    <a href="/excel/dept04/zzscgz" class="list-group-item">月度生产跟踪报表</a>
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