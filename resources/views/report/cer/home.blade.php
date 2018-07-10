@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>CER</h1>
            <p class="lead">整车档案系统</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/cer" class="list-group-item active">总览</a>
                    <a href="/report/cer/queue" class="list-group-item">可打印车辆信息</a>
                    <a href="/report/cer/print" class="list-group-item">今日发证信息</a>
                    <a href="/report/cer/error" class="list-group-item">上传失败信息</a>
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