@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>线上点检</h1>
            <p class="lead">千里之堤，毁于蚁穴</p>
        </div>
    </header>

    <div class="container projects">
        <div class="row">
            @foreach ($items as $item)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="thumbnail" style="cursor:pointer" onclick="window.open('{{$item->body}}')"
                         onmouseover="style.backgroundColor='#EEEEEE'" onmouseout="style.backgroundColor='#FFFFFF'">
                        <div class="caption">
                            <h3>
                                {{$item->title}}<br><br>
                                <small>创建用户ID：{{$item->user_id}}</small>
                            </h3>
                            <p>
                                创建时间：{{$item->created_at}}<br>
                                更新时间：{{$item->updated_at}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        window.onload = function () {
            document.getElementById("check").className = "active";
        }
    </script>
@endsection