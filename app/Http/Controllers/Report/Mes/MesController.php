<?php

namespace App\Http\Controllers\Report\Mes;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MesController extends Controller
{
    public function index()
    {
        return view('report.mes.home');
    }
}