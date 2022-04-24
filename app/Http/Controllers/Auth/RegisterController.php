<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SellerAuthRequest;
use App\Providers\RouteServiceProvider;

use App\User;
use App\Models\Seller;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

 //Appserviceprovider
//    public const HOME = 'ar/main';
//    public const ADMIN = 'ar/home/admin';
//    public const SUPERADMIN = 'ar/home/super-admin';
//    public const SELLER = 'ar/seller';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }




    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'] . ' ' . $data['l_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }



    ########################################################
//    public function showSellerRegisterationForm()
//    {
//        return view('auth.register' , ['url' => 'seller']);
//    }

    /*******************************************************/

//    protected function createSeller(SellerAuthRequest $request)
//    {
////        $this->validator($request->all())->validate();
//        $validated = $request->validated();
//
//        Seller::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//        ]);
//
//        return redirect()->intended('login/seller');
//    }
//
    #######################################################


}
