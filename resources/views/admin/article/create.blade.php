@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>新增失败</strong> 输入不符合要求<br><br>
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <form action="{{ url('admin/article') }}" method="POST">
                            {!! csrf_field() !!}
                            <input type="text" name="title" class="form-control" required="required"
                                   placeholder="请输入系统标题及描述，举个栗子[SRM - 外网]">
                            <br>
                            <textarea name="body" rows="5" class="form-control" required="required"
                                      placeholder="请输入从浏览器地址栏复制的完整域名，举个栗子[http://111.207.40.134/]"></textarea>
                            <br>
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-ok"
                                                                  aria-hidden="true"></span> 提交
                            </button>
                            <a href="{{ url('admin/article') }}" class="btn btn-default"><span
                                        class="glyphicon glyphicon-remove" aria-hidden="true"></span> 取消</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection