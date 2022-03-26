<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRegister;
use App\Http\Requests\vendorRegister;
use App\Providers\RouteServiceProvider;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use TCG\Voyager\Models\Role;

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

    use RegistersVendor;

    /**
     * Where to redirect users after registration.
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
            'f_name' => ['required', 'string', 'max:255'],
            'l_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender'=>['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $userRole = Role::where('name', 'user')->first();
        return User::create([
            'name' => $data['f_name'] . " " . $data['l_name'],
            'f_name' => $data['f_name'],
            's_name' => $data['l_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'type' => 'user',
            'role_id' => $userRole->id,
        ]);
    }
    // public function userRegister(Request $request)
    // {
    //     $validator = Validator::make(
    //         $request->all(),
    //         [
    //             'type' => 'required',
    //             'f_name' => 'required|string|max:35|min:3',
    //             'l_name' => 'required|string|max:35|min:3',
    //             'email' => 'required|string|email|unique:users',
    //             'gender' => 'required',
    //             'password' => 'required|string|min:6|confirmed',
    //         ]
    //     );
    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput($request->all());
    //     }

    //     // $request->validated();
    //     $userRole = Role::where('name', 'user')->first();

    //     $user = User::create([
    //         'type' => 'user',
    //         'name' => $request->f_name . " " . $request->l_name,
    //         'role_id' => $userRole->id,
    //         'f_name' => $request->f_name,
    //         's_name' => $request->l_name,
    //         'email' => $request->email,
    //         'gender' => $request->gender ?? null,
    //         'password' =>  Hash::make($request->password)
    //     ]);

    //     // Auth::login($user);

    //     //$request->session()->flash('success', 'Your accound add successfully');
    //     return redirect('/login')->with('success', 'Your accound add successfully');
    // }

    public function vendorRegister(vendorRegister $request)
    {
        // dd($request->all());
        $request->validated();

        $vendorRole = Role::where('name', 'vendor')->first();

        $user = User::create([
            'type' => 'vendor',
            'name' => $request->f_name . " " . $request->l_name,
            'role_id' => $vendorRole->id,
            'f_name' => $request->f_name,
            's_name' => $request->l_name,
            'full_name' => $request->title,
            'email' => $request->vendor_email,
            'password' =>  Hash::make($request->vendor_password),
            'phone' => $request->phone ?? null,
            'shop_name' => $request->shop_name ?? null,
            'country' => $request->city_id
        ]);
        // Auth::login($user);
        return redirect('/login')->with('success', 'Your accound add successfully');
    }
}
