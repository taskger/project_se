<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input ['password']))){
            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.home')->with('status','คุณได้เข้าระบบในฐานะแอดมิน');
            }if(auth()->user()->role == 'employee'){
                return redirect()->route('employee.home')->with('status','คุณได้เข้าระบบในฐานะพนักงาน');
            }if(auth()->user()->role == 'user'){
                return redirect()->route('home')->with('status',' ยินดีต้อนรับ ');
            }

        }else{
            return redirect()->route('login')->with('error','อีเมล์หรือรหัสผ่านไม่ถูกต้อง');
        }

        
    }
}
