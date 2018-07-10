<?php

namespace App\Http\Controllers\Report\Mes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Mes_AVI609Controller extends Controller
{
    public function index()
    {
        $items = DB::connection('mesprd1')
            ->table('t_avi_scanrecord')
            ->leftjoin('t_plan_plan', 't_avi_scanrecord.vincode', '=', 't_plan_plan.bus_tps')
            ->leftjoin('T_QUALITY_QUALITYTRACCOLLECT', 't_avi_scanrecord.vincode', '=', 'T_QUALITY_QUALITYTRACCOLLECT.bus_vin')
            ->select('t_plan_plan.bus_vin', 'vincode', 'passtime', 'deallab', 'djflag', 'materal_code')
            ->where('materal_code', 'like', '4A91%')
            ->where('scanpointcode', '609')
            ->where(function ($query) {
                $query->where('deallab', '0')->orwhere('djflag', '0');
            })
            ->where('passtype', '<>', '1')
            ->orderby('passtime', 'desc')
            ->get();
        return view('report.mes.avi_609', compact('items'));
    }
}