<?php

namespace App\Http\Controllers\API\auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Auth Controller
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

    public function login(Request $request){
        $credentials = $request->only('username', 'password');
        $request->merge([
            'is_active' => 1,
            'role' => 'spv',
        ]);
        try {            
            if (!$token = JWTAuth::attempt(
             [
                'username' => $request->username,
                'password' => $request->password,
                'is_active' => '1',
                'role' => 'spv'
             ]   
            )) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
            $datauser = User::where('username','=',$request->username)->first();
            $data = ["data"=>$datauser,"token"=>$token];
            return response()->json($data,200);
        } catch (JWTException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
     }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->intended(url('/'));
    }
}
