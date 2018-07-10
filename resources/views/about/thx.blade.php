@extends('layouts.itm')
@section('content')

    <header class="jumbotron subhead">
        <div class="container">
            <h1>致谢</h1>
            <p class="lead">TBD</p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-3 ">
                <div id="toc" class="bc-sidebar"></div>
            </div>

            <div class="col-md-9">
                <article class="post page">
                    <section class="post-content">
                        <h2 id="thx_0">开源项目</h2>
                        <p><a href="https://laravel.com" target="_blank">Laravel</a> ----- [Framework]</p>
                        <p><a href="https://mariadb.com/" target="_blank">MariaDB</a> ----- [Database]</p>
                        <p><a href="http://httpd.apache.org/" target="_blank">Apache</a> ----- [Server]</p>
                        <p><a href="http://cn.vuejs.org/" target="_blank">Vue.js</a> ----- [Front-End JS]</p>
                        <p><a href="http://v3.bootcss.com/" target="_blank">Bootstrap</a> ----- [Front-End CSS]</p>
                        <p><a href="http://www.phpcomposer.com/" target="_blank">Composer</a> ----- [Dependency]</p>
                        <p><a href="https://webpackjs.com/" target="_blank">webpack</a> ----- [Bundler]</p>
                        <p><a href="https://github.com/" target="_blank">Github</a> ----- [Code]</p>
                        <h2 id="thx_1">名人堂</h2>
                        <p><b>yajra</b>，提供Laravel的Oracle解决方案，Github地址：<a href="https://github.com/yajra/laravel-oci8" target="_blank">laravel-oci8</a></p>
                        <p><b>管晓宇/张蕊</b>，提供润乾报表的技术支持，友情链接：<a href="http://10.46.1.19/" target="_blank">本部开发管理平台</a></p>
                        <p><b>李刚/刘刚</b>，提供MES相关数据查询规则</p>
                        <p><b>IT各位同事</b>，提供开发全程的支持与配合</p>
                        <p><b>各位关键用户</b>，提供及时的反馈</p>
                    </section>
                </article>
            </div>
        </div>
    </div>

@endsection