@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">巡检域名管理</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                {!! implode('<br>', $errors->all()) !!}
                            </div>
                        @endif

                        <a href="{{ url('admin/article/create') }}" class="btn btn-primary"><span
                                    class="glyphicon glyphicon-plus" aria-hidden="true"></span> 新增</a>

                        @foreach ($articles as $article)
                            <hr>
                            <div class="article">
                                <h4>{{ $article->title }}</h4>
                                <div class="content">
                                    <p>
                                        {{ $article->body }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ url('admin/article/'.$article->id.'/edit') }}" class="btn btn-warning"><span
                                        class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 编辑</a>
                            <form action="{{ url('admin/article/'.$article->id) }}" method="POST"
                                  style="display: inline;">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="{{'#'.$article->id}}"><span
                                            class="glyphicon glyphicon-minus"
                                            aria-hidden="true"></span> 删除
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="{{$article->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span
                                                            aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">注意</h4>
                                            </div>
                                            <div class="modal-body">
                                                删除后无法恢复，Are you OK?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default"><span
                                                            class="glyphicon glyphicon-ok"
                                                            aria-hidden="true"></span> 是
                                                </button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal"><span
                                                            class="glyphicon glyphicon-remove"
                                                            aria-hidden="true"></span> 否
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="blog-footer">
        <p>北汽(镇江)汽车有限公司 - <a href="{{ url('/welcome') }}">IT内控平台</a></p>
        <p><a href="#"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> 回到顶部</a></p>
    </footer>
@endsection