<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRegister;
use App\Http\Requests\vendorRegister;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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

    use RegistersUsers;

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
        if ($data['type'] == 'user') {
            // dd('data  user ');
            return  Validator::make($data, [
                'f_name' => ['required', 'string', 'max:255'],
                'l_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'gender' => ['required'],
            ]);
        } elseif ($data['type'] == 'vendor') {
            // dd($data);
            return Validator::make(
                $data,
                [
                    'f_name' => ['required', 'string', 'max:40', 'min:3'],
                    'l_name' => ['required', 'string', 'max:40', 'min:3'],
                    'title' => ['required', 'in:Mr,Mrs,Miss,Ms'],
                    'email' => ['required', 'string', 'email', 'unique:users,email'],
                    'password' => ['required', 'string', 'min:6', 'confirmed'],
                    'type' => ['required'],
                    'phone' => ['required'],
                    'shop_name' => ['required', 'string', 'unique:users,shop_name', 'min:3', 'max:50'],
                    // 'country'=>''
                    'city_id' => ['required', 'exists:cities,id']
                ]
            );
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['type'] == 'user') {
            $userRole = Role::where('name', 'user')->first();
        } else {
            $userRole = Role::where('name', 'vendor')->first();
        }
        return User::create([
            'name' => $data['f_name'] . " " . $data['l_name'],
            'title' => $data['title'] ?? null,
            'f_name' => $data['f_name'],
            's_name' => $data['l_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'] ?? null,
            'phone' => $data['phone'] ?? null,
            'shop_name' => $data['shop_name'] ?? null,
            'country' => $data['city_id'] ?? null,
            'type' => $data['type'],
            'role_id' => $userRole->id,
        ]);
    }
}
