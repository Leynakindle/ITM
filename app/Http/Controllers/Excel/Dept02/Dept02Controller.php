<?php

namespace App\Http\Controllers\Excel\Dept02;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dept02Controller extends Controller
{
    public function index()
    {
        return view('excel.dept02.home');
    }
}
