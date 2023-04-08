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
    public function store(Request $request,plans $plan)
    {
        $request->validate([
            'Plancar' => 'required',
            'car-insurance' => 'required'
        ],[
            'Plancar.required' => "กรุณาเลือกแผนประกันของท่านด้วย",
            'car-insurance.required' => "กรุณาเลือกทุนประกันรถของท่านด้วย" 
        ]);
        plans::create($request->all());
         redirect()->route('selectmain')
                ->with('success', 'User create successfully.');
            return view('contacts.create');
    }
}
