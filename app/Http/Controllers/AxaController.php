<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AxaController extends Controller
{
    public function index()
    {
        return view('AXA');
    }
    public function inout()
    {
        return view('Axamain');
    }
}
