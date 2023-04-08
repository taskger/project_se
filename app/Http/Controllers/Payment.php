<?php

namespace App\Http\Controllers;

//use app\Models\Paymentpay;
use Illuminate\Http\Request;
use App\Models\prices;


class Payment extends Controller
{
    public function payment() {
        return view ('payments.Money1');
    }
    public function successc(){
        return view ('payments.success');
    }
    public function backs(){
        return view ('home');
    }
    public function prices(){
        $price = prices::all();
        return view('payments.Money1',compact('price'));
    }
}
