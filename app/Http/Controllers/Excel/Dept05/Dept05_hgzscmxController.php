<?php

namespace App\Http\Controllers\Excel\Dept05;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dept05_hgzscmxController extends Controller
{
    public function index()
    {
        return view('excel.dept05.hgzscmx');
    }
}