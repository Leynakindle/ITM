<?php

namespace App\Http\Controllers\Report\Mes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Mes_DSAController extends Controller
{
    public function index()
    {
        $items = DB::connection('beiqicar_bak')->select('
        SELECT
  VIN,
  MAX(JCSJ) JCSJ,
  SCCODE,
  SKCCODE
FROM T_DJ_RESULT
WHERE JCSJ >= trunc(sysdate)
GROUP BY VIN, SCCODE, SKCCODE
ORDER BY JCSJ DESC
        ');
        return view('report.mes.dsa', compact('items'));
    }
}