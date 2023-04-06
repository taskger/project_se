<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ProfileController extends Controller
{
    public function getAllUserdata()
    {
        $userdatas = Contact::all();
        return view('profile.profile',compact('userdatas'));
    }
}
