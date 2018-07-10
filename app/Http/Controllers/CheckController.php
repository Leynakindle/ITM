<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class CheckController extends Controller
{
    public function index()
    {
        $items = Article::all();
        //dd();
        return view('check', compact('items'));
    }
}