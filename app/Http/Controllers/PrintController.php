<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use \Mpdf\Mpdf as PDF;

class PrintController extends Controller
{
    public function getAllUserdata()
    {
        $userdatas = Contact::all();
        return view('admin.Print.print',compact('userdatas'));
    }
    public function downloadPDF()
    {
        $userdatas = Contact::all();
        $pdf = PDF::loadView('admin.Print.print',compact('userdatas'));
        return $pdf->download('Userdata.pdf');

    }
}
