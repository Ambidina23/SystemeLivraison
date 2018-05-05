<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected function authenticated(Request $request, $user)
    {
        if($user->type->id == 1) {
            return redirect()->intended('/pages/particulier'); // it will be according to your routes.

        } 
        if($user->type->id == 2) {
            return redirect()->intended('/pages/entreprise'); // it will be according to your routes.

        } 
        else {
            return redirect()->intended('/pages/organisme'); // it also be according to your need and routes
        }
    }
    
   /**protected $redirectTo = '/home';/
    /**
     * Where to redirect users after registration.
     *
     * @var string
      

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
            
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'type' => 'required|string|max:255|in:particulier,entreprise,organisme_public',
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
           
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
             'type' => $data['type'],
        ]);

    }
      protected function redirectTo()
    {

        if( auth()->user()->type  == 'particulier')
        {
            return '/particulier';

        }
        else if( auth()->user()->type== 'organisme_public')
        {
            return '/organisme_public';

        }else   if( auth()->user()->type == 'entreprise')
        {
            return '/entreprise';

        }

}

}
