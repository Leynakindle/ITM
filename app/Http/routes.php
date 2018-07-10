<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//==================== Old

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/checklist', 'HomeController@index');
Route::auth();
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'HomeController@index');
    Route::resource('article', 'ArticleController');
});

//==================== Index

Route::get('/', function () {
    return view('index');
});

//==================== Check

Route::get('/check', 'CheckController@index');

//==================== Report

Route::group(['namespace' => 'Report', 'prefix' => 'report'], function () {

    Route::get('/', 'ReportController@index');

    Route::group(['namespace' => 'Mes', 'prefix' => 'mes'], function () {
        Route::get('/', 'MesController@index');
        Route::get('/avi_409', 'Mes_AVI409Controller@index');
        Route::get('/avi_609', 'Mes_AVI609Controller@index');
        Route::get('/ga_print', 'Mes_GAPrintController@index');
        Route::get('/dsainfo', 'Mes_DSAController@index');
    });

    Route::group(['namespace' => 'Wms', 'prefix' => 'wms'], function () {
        Route::get('/', 'WmsController@index');
        Route::get('/sys', 'Wms_SYSController@index');
    });

    Route::group(['namespace' => 'Cer', 'prefix' => 'cer'], function () {
        Route::get('/', 'CerController@index');
        Route::get('/queue', 'Cer_QueueController@index');
        Route::get('/print', 'Cer_PrintController@index');
        Route::get('/error', 'Cer_ErrorController@index');
    });

});

//==================== Excel

Route::group(['namespace' => 'Excel', 'prefix' => 'excel'], function () {

    Route::get('/', 'ExcelController@index');

    Route::group(['middleware' => 'auth', 'namespace' => 'Dept02', 'prefix' => 'dept02'], function () {
        Route::get('/', 'Dept02Controller@index');
        Route::get('/kqrdmx', 'Dept02_kqrdmxController@index');
        Route::get('/jbtjmx', 'Dept02_jbtjmxController@index');
    });

    Route::group(['namespace' => 'Dept04', 'prefix' => 'dept04'], function () {
        Route::get('/', 'Dept04Controller@index');
        Route::get('/yscjdgk3', 'Dept04_yscjdgk3Controller@index');
        Route::get('/yscjdgk2', 'Dept04_yscjdgk2Controller@index');
        Route::get('/yscjdgk', 'Dept04_yscjdgkController@index');
        Route::get('/zzclmx', 'Dept04_zzclmxController@index');
        Route::get('/zzcltjhz', 'Dept04_zzcltjhzController@index');
        Route::get('/zzcltjmx', 'Dept04_zzcltjmxController@index');
        Route::get('/zzscgz', 'Dept04_zzscgzController@index');
    });

    Route::group(['namespace' => 'Dept05', 'prefix' => 'dept05'], function () {
        Route::get('/', 'Dept05Controller@index');
        Route::get('/hgzscmx', 'Dept05_hgzscmxController@index');
        Route::get('/hbqdzxjk', 'Dept05_hbqdzxjkController@index');
    });

});

//==================== About

Route::group(['prefix' => 'about'], function () {
    Route::get('/', function () {
        return view('about.about');
    });
    Route::get('/thx', function () {
        return view('about.thx');
    });
});

Route::get('/dev', function () {
    return view('dev');
});