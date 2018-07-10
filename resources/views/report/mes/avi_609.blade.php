@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>AVI - 609</h1>
            <p class="lead">每分钟自动刷新数据</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/mes" class="list-group-item">总览</a>
                    <a href="/report/mes/avi_409" class="list-group-item">AVI - 409</a>
                    <a href="/report/mes/avi_609" class="list-group-item active">AVI - 609</a>
                    <a href="/report/mes/ga_print" class="list-group-item">总装配置单打印</a>
                    {{--<a href="/report/mes/dsainfo" class="list-group-item">DSA发送SC与SKC</a>--}}
                </div>
            </div>

            <div class="col-md-10">
                <table class="table table-striped table-condensed table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center">VIN</th>
                        <th class="text-center">TPS</th>
                        <th class="text-center">609</th>
                        <th class="text-center">中都</th>
                        <th class="text-center">DMS</th>
                        <th class="text-center">追溯扫描</th>
                    </tr>
                    </thead>
                    @foreach ($items as $item)
                        <tr class="danger">
                            <td class="text-center">{{$item->bus_vin}}</td>
                            <td class="text-center">{{$item->vincode}}</td>
                            <td class="text-center">{{substr($item->passtime,-14)}}</td>
                            <td class="text-center">{{$item->deallab}}</td>
                            <td class="text-center">{{$item->djflag}}</td>
                            <td class="text-center">{{substr($item->materal_code,-7)}}</td>
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