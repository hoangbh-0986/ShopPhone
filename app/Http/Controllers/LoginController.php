<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Session;

class LoginController extends Controller
{
    public function getlogin()
    {
    	return view ('login');
    }

    public function postLogin(Request $request)
    { 
   		    $rules = [
            'email' => 'required|min:5',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required'  => 'email không được để trống',
            'email.min'      => 'email chứa ít nhất 5 ký tự', 
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu phải chứa ít nhất 6 ký tự'
        ];

          $validator = Validator::make($request->all(), $rules, $messages);
             if($validator->fails())
              {
            	return redirect()->back()->withErrors($validator);
        	  }
        else {
        	$email = $request->input('email');
			$password = $request->input('password');

			if( Auth::attempt(['email' => $email, 'password' =>$password])) {
			return redirect()->route('index');
			}	
			else {
			// Session::flash('error', 'Email hoặc mật khẩu không đúng!');

			return redirect('login');
			}
        }
    
    }
    public function logout()
    {
    	return view('login');
    }
 
}
