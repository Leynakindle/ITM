<?php

namespace App\Http\Controllers\Report\Cer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class Cer_ErrorController extends Controller
{
    public function index()
    {
        $items = DB::connection('bvbuvfsupd')->select('
        SELECT
  VIN,
  CERTIFICATENO,
  PRINT_DATE,
  UPINFO
FROM CERTIFICATEZ
WHERE UPFLG = 6 AND JSCS38 LIKE \'%镇江%\'
ORDER BY PRINT_DATE
        ');
        return view('report.cer.error', compact('items'));
    }
}
