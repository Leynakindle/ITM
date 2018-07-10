<?php

namespace App\Http\Controllers\Report\Cer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Cer_PrintController extends Controller
{
    public function index()
    {
        $items = DB::connection('bvbuvfsprt')->select('
        SELECT
  VIN,
  FDJH,
  JSCS0,
  CLZZRQ,
  CERTIFICATENO,
  PRINT_DATE
FROM CERTIFICATE
WHERE to_char(PRINT_DATE, \'yyyy-mm-dd\') = to_char(SYSDATE, \'yyyy-mm-dd\')
ORDER BY PRINT_DATE
        ');
        return view('report.cer.print', compact('items'));
    }
}