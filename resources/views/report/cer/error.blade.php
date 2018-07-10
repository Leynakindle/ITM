@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>上传失败信息</h1>
            <p class="lead">每分钟自动刷新数据</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/cer" class="list-group-item">总览</a>
                    <a href="/report/cer/queue" class="list-group-item">可打印车辆信息</a>
                    <a href="/report/cer/print" class="list-group-item">今日发证信息</a>
                    <a href="/report/cer/error" class="list-group-item active">上传失败信息</a>
                </div>
            </div>

            <div class="col-md-10">
                <table class="table table-striped table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">VIN</th>
                        <th class="text-center">合格证编号</th>
                        <th class="text-center">打印时间</th>
                        <th class="text-center">上传失败原因</th>
                    </tr>
                    </thead>
                    @foreach ($items as $item)
                        <tr>
                            <td class="text-center">{{$item->vin}}</td>
                            <td class="text-center">{{$item->certificateno}}</td>
                            <td class="text-center">{{$item->print_date}}</td>
                            <td class="text-center">{{$item->upinfo}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>

    <script>
        function myrefresh() {
            window.location.reload(true);
        }
        setTimeout('myrefresh()', 60000);
    </script>
@endsection