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
         'file2' => 'required|mimes:png,jpg,pdf|max:4028',
         'file3' => 'required|mimes:png,jpg,pdf|max:4028',
         'file4' => 'required|mimes:png,jpg,pdf|max:4028',
 
        ]);
 
        $name = $request->file('file')->getClientOriginalName();
        $name = $request->file('file2')->getClientOriginalName();
        $name = $request->file('file3')->getClientOriginalName();
        $name = $request->file('file4')->getClientOriginalName();
 
        $path = $request->file('file')->store('public/files');
        $path = $request->file('file2')->store('public/files');
        $path = $request->file('file3')->store('public/files');
        $path = $request->file('file4')->store('public/files');
 
 
        $save = new File;
 
        $save->name = $name;
        $save->path = $path;
 
        return redirect('file-upload')->with('status', 'File Has been uploaded successfully');
 
    }
}