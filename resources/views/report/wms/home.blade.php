@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>WMS</h1>
            <p class="lead">仓库管理系统</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/wms" class="list-group-item active">总览</a>
                    <a href="/report/wms/sys" class="list-group-item">数据库连接状态</a>
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