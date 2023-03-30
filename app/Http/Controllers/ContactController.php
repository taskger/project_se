<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::first()->paginate(8);
        return view('contacts.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1 ) * 8);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Contact $contact)
    {
        $request->validate([
            'prefix' => 'required',
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email'],
            'birthday' => 'required',
            'identification' => ['required', 'string', 'max:13'],
            'status' => ['required', 'string'],
            'career' => ['required', 'string'],  
            'province' => 'required',
            'amphoe' => 'required',
            'tambon' => 'required',
            'input_zipcode' => 'required',
            'address' => ['required', 'string'],
            'road' => ['required', 'string'],
            'coverstartdate' => 'required',
            'brand' => ['required', 'string'],
            'carmodel' => ['required', 'string'],
            'caryear' => ['required', 'string'],
            'registrationnumber' => ['required', 'string'],
            'registrationprovince' => 'required',
            'chassisnumber' => ['required', 'string'],
            'carpaint' => ['required', 'string']
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')
                ->with('success', 'User create successfully.');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'prefix' => 'required',
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10'],
            'email' => ['required', 'string', 'email'],
            'birthday' => 'required',
            'identification' => ['required', 'string', 'max:13'],
            'status' => ['required', 'string'],
            'career' => ['required', 'string'],  
            'province' => 'required',
            'amphoe' => 'required',
            'tambon' => 'required',
            'input_zipcode' => 'required',
            'address' => ['required', 'string'],
            'road' => ['required', 'string'],
            'coverstartdate' => 'required',
            'brand' => ['required', 'string'],
            'carmodel' => ['required', 'string'],
            'caryear' => ['required', 'string'],
            'registrationnumber' => ['required', 'string'],
            'registrationprovince' => 'required',
            'chassisnumber' => ['required', 'string'],
            'carpaint' => ['required', 'string']

        ]);

        $contact->update($request->all());
        redirect()->route('contacts.index')
                ->with('success', 'User updated successfully.');
        return view('contacts.show',compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')
                ->with('success', 'User deleted successfully.');

    }
}
