<?php

namespace App\Http\Controllers;

use App\Models\Adverts;
use Illuminate\Http\Request;

class advertscontroller extends Controller
{
    //creat index
    public function index(){
        $data['Adverts'] = Adverts:: orderby('id', 'asc')->paginate(5);
        return view('a  dverts.index', $data);
    }
        public function am(){
        $data['Adverts'] = Adverts:: orderby('id', 'asc')->paginate(5);
        return view('adverts.am ', $data);
    }

    //creat resourc
    public function create(){
        return view('adverts.create');
    }

    //store resource
    public function store(Request $request,Adverts $adverts){
        $request->validate([
            'img' => 'required',
            'text' => 'required'
        ]);
        if($request->hasfile('img_image'))
        {
            $file = $request->file('img_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/img/', $filename);
            $adverts->img_image = $filename;
        }
        $adverts -> img = $request->img;
        $adverts -> text = $request->text;
        $adverts ->save();
        return redirect()->route('adverts.index')
            ->with('success', 'Adverts has been created successfully!');
    }
    public function show($id)
    {
        $adverts = Adverts::find($id);
        if ($adverts) {
            return view('adverts.show', compact('adverts'));
        } else {
            return redirect()->route('adverts.am')->with('error', 'Adverts not found');
        }
    }
    public function edit($id) {
        $adverts = Adverts::find($id);
        return view('adverts.edit', compact('adverts'));
    }
    public function update(Request $request, $id) {
        $request->validate([
            'img' => 'required',
            'text' => 'required'
        ]);
        if($request->hasfile('img_image'))
        {
            $destination = 'uploads/img/'.$adverts->img_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('img_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/img/', $filename);
            $adverts->img_image = $filename;
        }
        $adverts = Adverts::find($id);
        $adverts->img =$request->img;
        $adverts->text =$request->text;
        $adverts->save();
        return redirect()->route('averts.index', ['Adverts' => $adverts])->with('success', 'adverts has been updated successfully.');
    }
    public function destroy($id) {
        $adverts = Adverts::find($id);
        $adverts->delete();
        return redirect()->route('adverts.index')->with('success', 'adverts has been delete successfully.');
    }
 }

