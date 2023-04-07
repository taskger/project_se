<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan;

class SelectController extends Controller
{
    public function index()
    {
        return view('select.selectmain');
    }
    public function store(Request $request,Plan $plan)
    {
        $request->validate([
            'Plan' => 'required',
            'car-insurance' => 'required'
        ],[
            'Plan.required' => "กรุณาเลือกแผนประกันของท่านด้วย",
            'car-insurance' => "กรุณาเลือกทุนประกันรถของท่านด้วย" 
        ]);
    }
}
