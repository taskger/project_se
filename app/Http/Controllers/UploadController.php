<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\CreateFileUpload;
 
class UploadController extends Controller
{
    public function index() 
    {
        $fileUploads = CreateFileUpload::get();
        return view('upload-file', ['upload_file' => $fileUploads]);
    }
 
    public function multipleUpload(Request $request) 
    {
        $this->validate($request, [
            'upload_file' => 'required',
            'upload_file.*' => 'mimes:doc,pdf,docx,pptx,zip'
        ]);
 
        $files = $request->file('upload_file');
        foreach($files as $file){
            $fileUpload = new FileUpload;
            $fileUpload->filename = $file->getClientOriginalName();
            $fileUpload->filepath = $file->store('upload_file');
            $fileUpload->type= $file->getClientOriginalExtension();
            $fileUpload->save();
        }   
 
        return redirect()->route('upload-file.index')->with('success','Files uploaded successfully!');
    }
}