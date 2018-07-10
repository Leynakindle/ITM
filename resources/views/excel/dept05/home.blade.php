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
                    <a href="/excel/dept05" class="list-group-item active">总览</a>
                    <a href="/excel/dept05/hgzscmx" class="list-group-item">合格证上传明细报表</a>
                    <a href="/excel/dept05/hbqdzxjk" class="list-group-item">环保清单专项监控报表</a>
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