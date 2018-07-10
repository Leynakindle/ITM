<?php

namespace App\Http\Controllers\Report\Cer;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CerController extends Controller
{
    public function index()
    {
        return view('report.cer.home');
    }
}