<?php

namespace App\Http\Controllers\Report\Wms;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WmsController extends Controller
{
    public function index()
    {
        return view('report.wms.home');
    }
}
