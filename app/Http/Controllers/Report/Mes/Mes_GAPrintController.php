<?php

namespace App\Http\Controllers\Report\Mes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Mes_GAPrintController extends Controller
{
    public function index()
    {
        $items = DB::connection('mesprd1')->select('
        SELECT *
FROM (SELECT
        s.WORKSHOPSN,
        pr.CARCODE,
        pr.PRINTERIP
      FROM T_BASEDATA_PRINTRECORD pr
        LEFT JOIN T_AVI_SCANRECORD s ON pr.CARCODE = s.VINCODE
      WHERE s.SCANPOINTCODE = \'409\' AND s.PASSTYPE != 1
      ORDER BY WORKSHOPSN DESC)
WHERE ROWNUM <= 14
ORDER BY WORKSHOPSN DESC, PRINTERIP DESC
        ');
        return view('report.mes.ga_print', compact('items'));
    }
}