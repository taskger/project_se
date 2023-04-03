<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddfileController extends Controller
{
    public function addfile()
    {
        return view('admin.addfile.index');
    }
}
