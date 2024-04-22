<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function formLogin(){

		return view('auth.login');
	}

    public function postLogin(Request $request){
        try {
            // $newpassword = Hash::make($request->password);
            // dd($newpassword);
            // dd($request->all());
            if(Auth::attempt([
                'username' => $request->username,
                'password' => $request->password,
                'is_active' => '1'
                ])){
                    $request->session()->regenerate();
                    // dd(Auth::user()->role);
                    if(Auth::user()->role == "user") return redirect('/list_delivery_order');
                    else if(Auth::user()->role == "admin" ) return redirect('/list_delivery_order');
                    else return redirect('/list_delivery_order');
                
            }else{
                // dd("salah");
                return redirect('/')->with(['warning' => 'Kombinasi Email dan Password anda tidak cocok, silahkan coba lagi']);
            }
            
        }catch (Exception $e) {
            dd($e->getMessage());

            return redirect('/')->with('error', 'ok');
    
        }
		
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->intended(url('/'));
    }
}
