<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
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
	
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
	 protected $redirectTo = '/';
	 
		 /**
		  * Create a new controller instance.
		  *
		  * @return void
		  */
		 public function __construct()
		 {
			 //$this->middleware('guest');
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
				 'name' => 'required|string|max:128',
				 'username' => 'required|string|max:32',
				 'email' => 'required|string|email|max:255|unique:users',
				 'password' => 'required|string|min:8|confirmed',
				 'password_confirmation' => 'required|string|same:password',
				 'birth' => 'required|string|max:10',
			 ]);
		 }
	 
		 /**
		  * Create a new user instance after a valid registration.
		  *
		  * @param  array  $data
		  * @return \App\User
		  */

		  function getToken($length){
				$token = "";
				$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
				$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
				$codeAlphabet.= "0123456789";
				$max = strlen($codeAlphabet); // edited
		
			for ($i=0; $i < $length; $i++) {
				$token .= $codeAlphabet[random_int(0, $max-1)];
			}
		
			return $token;
		}

		 protected function create(array $data)
		 {
			 return User::create([
				 'name' => $data['name'],
				 'username' => $data['username'],
				 'email' => $data['email'],
				 'password' => bcrypt($data['password']),
				 'birth' => $data['birth'],
				 'location' => $data['location'],
				 'gender' => $data['gender'],
				 'activation_code' => $this->getToken(128),
			 ]);
		 }
	 }
	 
