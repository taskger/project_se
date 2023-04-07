<?php

namespace App\Http\Controllers;


use App\Models\Checkpay;
use Illuminate\Http\Request;

class Checkcay extends Controller
{
    public function checkcay(){
        return view('payments.checkcay');
    }
}
