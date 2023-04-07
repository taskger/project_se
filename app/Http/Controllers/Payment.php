<?php

namespace App\Http\Controllers;

//use app\Models\Paymentpay;
use Illuminate\Http\Request;

class Payment extends Controller
{
    public function payment() {
        return view ('payments.Money1');
    }
}
