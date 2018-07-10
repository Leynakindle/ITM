<?php

namespace App\Http\Controllers\Report\Mes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Mes_AVI409Controller extends Controller
{
    public function index()
    {
        $items = DB::connection('mesprd1')
            ->table('t_avi_scanrecord')
            ->leftjoin('t_plan_plan', 't_avi_scanrecord.vincode', '=', 't_plan_plan.bus_tps')
            ->select('bus_vin', 'workshopsn', 'vincode', 'passtime', 'deallab', 'sendwmsflag', 'sendsrmflag', 'djflag')
            ->where('passtime', 'like', date('Y-m-d%'))
            ->where('scanpointcode', '409')
            ->where('passtype', '<>', '1')
            ->orderby('passtime', 'desc')
            ->get();
        return view('report.mes.avi_409', compact('items'));
    }
}