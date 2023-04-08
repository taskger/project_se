<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class PrintController extends Controller
{
    public function getAllUserdata()
    {
        $userdatas = Contact::all();
        return view('admin.Print.print',compact('userdatas'));
    }
    
}
