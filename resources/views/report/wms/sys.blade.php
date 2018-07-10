@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>数据库连接状态</h1>
            <p class="lead">每分钟自动刷新数据</p>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2">
                <div class="list-group">
                    <a href="/report/wms" class="list-group-item">总览</a>
                    <a href="/report/wms/sys" class="list-group-item active">数据库连接状态</a>
                </div>
            </div>

            <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">主机</th>
                        <th class="text-center">当前 Processes</th>
                        <th class="text-center">最大 Processes</th>
                        <th class="text-center">当前 Sessions</th>
                        <th class="text-center">最大 Sessions</th>
                    </tr>
                    </thead>
                    @foreach ($items as $item)
                        @if($item[1]*2<$item[2]&&$item[3]*2<$item[4])
                            <tr>
                                <td class="text-center">{{$item[0]}}</td>
                                <td class="text-center">{{$item[1]}}</td>
                                <td class="text-center">{{$item[2]}}</td>
                                <td class="text-center">{{$item[3]}}</td>
                                <td class="text-center">{{$item[4]}}</td>
                            </tr>
                        @else
                            <tr class="danger">
                                <td class="text-center">{{$item[0]}}</td>
                                <td class="text-center">{{$item[1]}}</td>
                                <td class="text-center">{{$item[2]}}</td>
                                <td class="text-center">{{$item[3]}}</td>
                                <td class="text-center">{{$item[4]}}</td>
                            </tr>
                        @endif
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