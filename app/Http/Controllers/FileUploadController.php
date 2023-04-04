<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\File;
 
class FileUploadController extends Controller
{
     public function index()
    {
        return view('admin.Uploadfile.file-upload');
    }
 
    public function store(Request $request)
    {
         
        $validatedData = $request->validate([
         'file' => 'required|mimes:png,jpg,pdf|max:4028',
 
        ]);
 
        $name = $request->file('file')->getClientOriginalName();
 
        $path = $request->file('file')->store('public/files');
 
 
        $save = new File;
 
        $save->name = $name;
        $save->path = $path;
 
        return redirect('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');
 
    }
}