@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>人力资源部</h1>
            <p class="lead">Human Resource Department</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/excel/dept02" class="list-group-item">总览</a>
                    <a href="/excel/dept02/kqrdmx" class="list-group-item">考勤日度明细报表</a>
                    <a href="/excel/dept02/jbtjmx" class="list-group-item active">加班统计明细报表</a>
                </div>
            </div>

            <div class="col-md-10">
                <iframe src="http://10.48.21.23:8080/demo/reportJsp/showReport.jsp?rpx=/dept02/jbtjmx.rpx"
                        height="720" width="100%" frameborder="0" scrolling="auto"></iframe>
            </div>

        </div>
    </div>

    <script>
        window.onload = function () {
            document.getElementById("excel").className = "active";
        }
    </script>
@endsection