<?php

namespace App\Http\Controllers\Excel\Dept05;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Dept05Controller extends Controller
{
    public function index()
    {
        return view('excel.dept05.home');
    }
}