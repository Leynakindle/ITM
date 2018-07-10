@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>质量部</h1>
            <p class="lead">Quality Department</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/excel/dept05" class="list-group-item">总览</a>
                    <a href="/excel/dept05/hgzscmx" class="list-group-item active">合格证上传明细报表</a>
                    <a href="/excel/dept05/hbqdzxjk" class="list-group-item">环保清单专项监控报表</a>
                </div>
            </div>

            <div class="col-md-10">
                <iframe src="http://10.48.21.23:8080/demo/reportJsp/showReport.jsp?rpx=/dept05/hgzscmx.rpx"
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