@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>总装配置单打印</h1>
            <p class="lead">每分钟自动刷新数据</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/mes" class="list-group-item">总览</a>
                    <a href="/report/mes/avi_409" class="list-group-item">AVI - 409</a>
                    <a href="/report/mes/avi_609" class="list-group-item">AVI - 609</a>
                    <a href="/report/mes/ga_print" class="list-group-item active">总装配置单打印</a>
                    {{--<a href="/report/mes/dsainfo" class="list-group-item">DSA发送SC与SKC</a>--}}
                </div>
            </div>

            <div class="col-md-10">
                <table class="table table-striped table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">总装流水</th>
                        <th class="text-center">TPS</th>
                        <th class="text-center">打印机(最新14行记录)</th>
                    </tr>
                    </thead>
                    @foreach ($items as $item)
                        <tr>
                            <td class="text-center">{{$item->workshopsn}}</td>
                            <td class="text-center">{{$item->carcode}}</td>
                            <td class="text-center">{{$item->printerip}}</td>
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