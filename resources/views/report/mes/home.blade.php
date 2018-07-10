@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>MES</h1>
            <p class="lead">制造执行系统</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/mes" class="list-group-item active">总览</a>
                    <a href="/report/mes/avi_409" class="list-group-item">AVI - 409</a>
                    <a href="/report/mes/avi_609" class="list-group-item">AVI - 609</a>
                    <a href="/report/mes/ga_print" class="list-group-item">总装配置单打印</a>
                    {{--<a href="/report/mes/dsainfo" class="list-group-item">DSA发送SC与SKC</a>--}}
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