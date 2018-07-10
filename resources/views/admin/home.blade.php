@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">控制台</div>
                    <div class="panel-body">
                        <a href="{{ url('admin/article') }}" class="btn btn-lg btn-primary col-xs-12">
                            <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 巡检域名管理</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection