<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
use Illuminate\Support\Str;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    protected function resetPassword($user, $password)
    {
        $user->password = null;
        $user->forceFill([
            'password' => $password,
            'remember_token' => Str::random(60),
        ])->save();
    
        $this->guard()->login($user);
    }
    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(auth()->user()->role == 'user'){
            return redirect()->route('home')->with('status',' ยินดีต้อนรับ ');
        }
    }
}