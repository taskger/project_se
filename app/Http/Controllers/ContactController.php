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
        ],[
            'firstname.required' => "กรุณาใส่ชื่อของท่านด้วย",
            'lastname.required' => "กรุณาใส่นามสกุลของท่านด้วย",
            'phone.required' => "กรุณาใส่เบอร์ของท่านด้วย",
            'phone.max:10' => "กรุณาใส่เบอร์ไม่เกิน 10 หลัก",
            'email.required' => "กรุณาใส่อีเมลของท่านด้วย",
            'birthday.required' => "กรุณาใส่ปีเกิดของท่านด้วย",
            'identification.required' => "กรุณาใส่เลขบัตรประชาชนของท่านด้วย",
            'identification.max:13' => "กรุณาใส่เลขบัตรประชาชนไม่เกิน 13 หลัก",
            'career.required' => "กรุณาใส่อาชีพของท่านด้วย",  
            'province.required' => "กรุณาเลือกจังหวัดของท่านด้วย",
            'amphoe.required' => "กรุณาเลือกอำเภอของท่านด้วย",
            'tambon.required' => "กรุณาเลือกตำบลของท่านด้วย",
            'input_zipcode.required' => "กรุณาใส่เลขรหัสไปรษณีย์ของท่านด้วย",
            'address.required' => "กรุณาใส่ที่อยู่ของท่านด้วย",
            'road.required' => "กรุณาใส่ถนนของท่านด้วย",
            'coverstartdate.required' => "กรุณาใส่วันเริ่มประกันของท่านด้วย",
            'brand.required' => "กรุณาใส่ยี่ห้อรถของท่านด้วย",
            'carmodel.required' => "กรุณาใส่รุ่นรถของท่านด้วย",
            'caryear.required' => "กรุณาใส่ปีรถของท่านด้วย",
            'registrationnumber.required' => "กรุณาใส่เลขทะเบียนรถของท่านด้วย",
            'registrationprovince.required' => "กรุณาใส่จังหวัดที่จดทะเบียนรถของท่านด้วย",
            'chassisnumber.required' => "กรุณาใส่เลขตัวถังของท่านด้วย",
            'carpaint.required' => "กรุณาใส่สีรถของท่านด้วย"

        ]
        );

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

        ],[
            'firstname.required' => "กรุณาใส่ชื่อของท่านด้วย",
            'lastname.required' => "กรุณาใส่นามสกุลของท่านด้วย",
            'phone.required' => "กรุณาใส่เบอร์ของท่านด้วย",
            'phone.max:10' => "กรุณาใส่เบอร์ไม่เกิน 10 หลัก",
            'email.required' => "กรุณาใส่อีเมลของท่านด้วย",
            'birthday.required' => "กรุณาใส่ปีเกิดของท่านด้วย",
            'identification.required' => "กรุณาใส่เลขบัตรประชาชนของท่านด้วย",
            'identification.max:13' => "กรุณาใส่เลขบัตรประชาชนไม่เกิน 13 หลัก",
            'career.required' => "กรุณาใส่อาชีพของท่านด้วย",  
            'province.required' => "กรุณาเลือกจังหวัดของท่านด้วย",
            'amphoe.required' => "กรุณาเลือกอำเภอของท่านด้วย",
            'tambon.required' => "กรุณาเลือกตำบลของท่านด้วย",
            'input_zipcode.required' => "กรุณาใส่เลขรหัสไปรษณีย์ของท่านด้วย",
            'address.required' => "กรุณาใส่ที่อยู่ของท่านด้วย",
            'road.required' => "กรุณาใส่ถนนของท่านด้วย",
            'coverstartdate.required' => "กรุณาใส่วันเริ่มประกันของท่านด้วย",
            'brand.required' => "กรุณาใส่ยี่ห้อรถของท่านด้วย",
            'carmodel.required' => "กรุณาใส่รุ่นรถของท่านด้วย",
            'caryear.required' => "กรุณาใส่ปีรถของท่านด้วย",
            'registrationnumber.required' => "กรุณาใส่เลขทะเบียนรถของท่านด้วย",
            'registrationprovince.required' => "กรุณาใส่จังหวัดที่จดทะเบียนรถของท่านด้วย",
            'chassisnumber.required' => "กรุณาใส่เลขตัวถังของท่านด้วย",
            'carpaint.required' => "กรุณาใส่สีรถของท่านด้วย"

        ]
        );

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
