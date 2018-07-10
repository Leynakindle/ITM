<?php

namespace App\Http\Controllers\Excel\Dept04;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dept04_zzclmxController extends Controller
{
    public function index()
    {
        return view('excel.dept04.zzclmx');
    }
}