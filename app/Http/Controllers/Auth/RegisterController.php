<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

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
    protected function redirectTo()
    {
        if (Auth::user()->role == '1') {

            return 'admins/index';
        } else {

            return 'user/index';
        }
    }

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
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        $refer_by = User::where('code', $data['code'])->first();
        // dd($refer_by);

        if ($refer_by == null) {
            return User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'role' => 2,
                'phone' => $data['phone'],
                'email' => $data['email'],
                'refer_by' => '',
                'password' => Hash::make($data['password']),
            ]);
        } else {
            $refer_by_id = $refer_by->id;

            return User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'role' => 2,
                'phone' => $data['phone'],
                'email' => $data['email'],
                'refer_by' => $refer_by_id,
                'password' => Hash::make($data['password']),
            ]);
        }
    }
}
