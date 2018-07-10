<?php

namespace App\Http\Controllers\Report\Cer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Cer_QueueController extends Controller
{
    public function index()
    {
        $items = DB::connection('bvbuvfsprt')->select('
        SELECT
  VIN,
  ENGINE_CODE,
  MATERIAL18_CODE,
  PROD_DATE,
  INSERTDATE
FROM PRINTQUEUE
WHERE PRINTFLG = 0
ORDER BY PROD_DATE
        ');
        return view('report.cer.queue', compact('items'));
    }
}