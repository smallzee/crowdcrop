<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function showLoginForm()
    {
        if (Auth::check() && Auth::user()->role_id == 1){
            return redirect()->intended('panel/dashboard');
        }elseif (Auth::check() && Auth::user()->role_id == 2){
            return redirect()->intended('agent/dashboard');
        }else{
            return view('auth.login');
        }
    }

    public function logout(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if ($validator->fails()){
            return back()->with('alert_error',$validator->errors()->first())->withInput();
        }

        $log  = Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]);


        if($log){
            if (Auth::user()->role_id == 1){
                return redirect()->intended('panel/dashboard');
            }elseif (Auth::user()->role_id == 2){
                return redirect()->intended('agent/dashboard');
            } else{
                return back()->with("alert_error", 'Access denied')->withInput();
            }

        }else{
            return back()->with('alert_error','Invalid login details');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
