<?php

namespace App\Http\Controllers;

use App\Models\Checkpay;
use App\Models\Contact;
use Illuminate\Http\Request;

class Checkpaycon extends Controller
{
    //create check
    public function index(){
        $data['payments'] = Checkpay::orderBy('id','desc')->paginate(10);
        return view('payments.index',$data);
    }

}
