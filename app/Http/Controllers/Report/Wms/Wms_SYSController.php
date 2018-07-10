<?php

namespace App\Http\Controllers\Report\Wms;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Wms_SYSController extends Controller
{
    public function index()
    {
        $items1_hn = DB::connection('wmsprd1')->table('v$instance')->value('host_name');
        $items1_pn = DB::connection('wmsprd1')->table('v$process')->count();
        $items1_pm = DB::connection('wmsprd1')->table('v$parameter')->where('name', 'processes')->value('display_value');
        $items1_sn = DB::connection('wmsprd1')->table('v$session')->count();
        $items1_sm = DB::connection('wmsprd1')->table('v$parameter')->where('name', 'sessions')->value('display_value');
        $items2_hn = DB::connection('wmsprd2')->table('v$instance')->value('host_name');
        $items2_pn = DB::connection('wmsprd2')->table('v$process')->count();
        $items2_pm = DB::connection('wmsprd2')->table('v$parameter')->where('name', 'processes')->value('display_value');
        $items2_sn = DB::connection('wmsprd2')->table('v$session')->count();
        $items2_sm = DB::connection('wmsprd2')->table('v$parameter')->where('name', 'sessions')->value('display_value');
        $items3_hn = DB::connection('wmsprd3')->table('v$instance')->value('host_name');
        $items3_pn = DB::connection('wmsprd3')->table('v$process')->count();
        $items3_pm = DB::connection('wmsprd3')->table('v$parameter')->where('name', 'processes')->value('display_value');
        $items3_sn = DB::connection('wmsprd3')->table('v$session')->count();
        $items3_sm = DB::connection('wmsprd3')->table('v$parameter')->where('name', 'sessions')->value('display_value');

        $items = array
        (
            array($items1_hn, $items1_pn, (int)$items1_pm, $items1_sn, (int)$items1_sm),
            array($items2_hn, $items2_pn, (int)$items2_pm, $items2_sn, (int)$items2_sm),
            array($items3_hn, $items3_pn, (int)$items3_pm, $items3_sn, (int)$items3_sm)
        );
        return view('report.wms.sys', compact('items'));
    }
}