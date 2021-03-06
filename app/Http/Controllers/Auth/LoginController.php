<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:super-admin')->except('logout');
        $this->middleware('guest:seller')->except('logout');

    }

    public function loginByPhone(Request $request)
    {

                    $this->validate($request, [
                        'phone' => 'nullable|string',
                        'password' => 'required|min:6'
                    ]);
                    if (Auth::guard('web')->attempt([
                        'phone' => $request->email,
                        'password' => $request->password,
                    ], $request->get('remember'))) {
                        return redirect()->intended('/');
                    }
                    return redirect()->back()->withInput($request->only('phone', 'remember'));
    }



    public function showAdminLoginForm()
    {
        return view('auth.login' , ['url' => 'admin']);
    }




    public function adminLogin(Request $request)
    {
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
            if(Auth::guard('admin')->attempt([
                'email' => $request->email ,
                'password' => $request->password ,
            ], $request->get('remember'))){
                return redirect()->intended('/admin');
            }
            return redirect()->back()->withInput($request->only('email' , 'remember'));
    }
    ########################################################
    public function showSuperAdminLoginForm()
    {
        return view('auth.login' , ['url' => 'super-admin']);
    }

    public function superAdminLogin(Request $request)
    {
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('super-admin')->attempt([
            'email' => $request->email ,
            'password' => $request->password ,
        ], $request->get('remember'))){
            return redirect()->intended('/super-admin');
        }
        return redirect()->back()->withInput($request->only('email' , 'remember'));
    }

    #########################################################
    public function showSellerLoginForm()
    {
        return view('auth.login' , ['url' => 'seller']);
    }

    public function sellerLogin(Request $request)
    {
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('seller')->attempt([
            'email' => $request->email ,
            'password' => $request->password ,
        ], $request->get('remember'))){
            return redirect()->intended('/seller');
        }
        return redirect()->back()->withInput($request->only('email' , 'remember'));
    }

    ################################################################

    public function showUserLoginForm()
    {
        return view('auth.login' , ['url' => 'user']);
    }

    public function userLogin(Request $request)
    {
        $this->validate($request , [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(Auth::guard('user')->attempt([
            'email' => $request->email ,
            'password' => $request->password ,
        ], $request->get('remember'))){
            return redirect()->intended('/user');
        }
        return redirect()->back()->withInput($request->only('email' , 'remember'));
    }
    #########################################################
    ################################################################

}
