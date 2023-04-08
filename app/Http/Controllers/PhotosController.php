<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PhotosController extends Controller
{
  public function view(){
    return view('admin.file.file');
  }
  public function view2(){
    return view('admin.file.file2');
  }
  public function view3(){
    return view('admin.file.file3');
  }
  public function view4(){
    return view('admin.file.file4');
  }

  public function store(Request $req){
    $usr = Auth::user('name');
    $req->validate([
      'imageFile' => 'required',
      'imageFile.*' => 'mimes:jpeg,jpg,png,pdf|max:5120'
    ]);

    if($req->hasfile('imageFile')) {
        foreach($req->file('imageFile') as $file)
        {
            $name = $file->getClientOriginalName();
            $file->move(public_path().'/uploads/', $name);  
            $imgData[] = $name;  
        }

        $fileModal = new Image();
        $fileModal->name = json_encode($imgData);
        $fileModal->image_path = json_encode($imgData);
        $fileModal->user = $usr;
        
       
        $fileModal->save();

       return back()->with('success', 'File has successfully uploaded!');
    }
  }
}