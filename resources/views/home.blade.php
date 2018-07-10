@extends('layouts.app')
@section('content')

    <div class="container">
        <div id="title" style="text-align: center;">
            <h1 style='font-family: "SimSun", 微软雅黑, "Helvetica Neue", Arial, sans-serif;'>千里之堤，毁于蚁穴</h1>
        </div>
        <hr>
        <div id="content">
            <ul>
                @foreach ($articles as $article)
                    <li style="margin:30px 30px;">
                        <div class="title">
                            <h4>{{$article->title}}</h4>
                        </div>
                        <div class="body">
                            <p><a href="{{$article->body}}" target="_blank">{{$article->body}}</a></p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        window.onload = function () {
            alert("此为旧版页面，点击新系统导航栏的【线上点检】访问新版 :)");
            document.getElementById("tab_1").className = "active";
        }
    </script>

    <footer class="blog-footer">
        <p>北汽(镇江)汽车有限公司 - <a href="{{ url('/welcome') }}">IT内控平台</a></p>
        <p><a href="#"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> 回到顶部</a></p>
    </footer>
@endsection