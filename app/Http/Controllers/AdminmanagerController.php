<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Contact;


class AdminmanagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $users = User::where('role', 'user')->get();

            return view('admin.manageruser.index',compact('users'));
    }

    public function adminmanager()
    {
        $users = User::where('role', 'admin')->get();
        return view('admin.manageruser.adminmanager', compact('users'));
    }
    public function employeemanager()
    {
        $users = User::where('role', 'employee')->get();
        return view('admin.manageruser.employeemanager', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.manageruser.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,User $user)
    {
        $request->validate([
            'role' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'password' => 'required',
        ]);
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $user->profile_image = $filename;
        }
        $user->role = $request->role;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('manageruser.index')
                    ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        $user = User::find($user_id);
        return view('admin.manageruser.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($user_id)
    {
        $user = User::find($user_id);

        return view('admin.manageruser.edit', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user_id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'telephone' => 'required',

        ]);
        $user = User::find($user_id);
        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/profiles/'.$user->profile_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $user->profile_image = $filename;
        }
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->password = $request->password;
        $user->update();
        return redirect()->route('manageruser.index', ['User' => $user])
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect()->route('manageruser.index')
                        ->with('success','User deleted successfully');
    }

}
