<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use Session;
use App\Customer;

class LoginController extends Controller
{
    public function getlogin()
    {
    	return view ('login');
    }

    public function postLogin(Request $request)
    { 
   		    $rules = [
            'email' => 'required|min:5|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required'  => 'email không được để trống',
            'email.min'      => 'email chứa ít nhất 5 ký tự',
            'email.email' => 'email không đúng định dạng', 
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
			// session()->put('userlogin')->Customer;
			}	
			else {
			 // Session::flash('error', 'Email hoặc mật khẩu không đúng!');

			return redirect('login');
			}
        }
    
    }
    public function logout()
    {
    	Auth::logout();
    	return view('login') ;
    }


    public function getRegistration()
    {
    	return view('registrantion');
    }


 	public function postRegistration(Request $request)
 	{
 			  $rules = [
            'email' => 'required|min:5|email',
            'password' => 'required|min:6',
            'name' => 'required|min:3',
            'add' => 'required|min:3',
            'phonenumber' => 'required',
            'enterpassword' => 'required|same:password'
        ];
        $messages = [
            'email.required'  => 'email không được để trống',
            'email.min'      => 'email chứa ít nhất 5 ký tự',
            'email.email' => 'email không đúng định dạng', 
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'name.required' => 'Tên không được để trống',
            'name.min'      => 'Tên chứa ít nhất 3 ký tự',
            'add.required' => 'Địa chỉ không được để trống',
            'add.min' => 'Địa chỉ quá ngắn',
            'phonenumber.required' => 'Số điện thoại không được để trống ',
            'enterpassword.required' =>'Nhập lại mật khẩu không được để trống',
            'enterpassword.same' => 'Mật khẩu không khớp' 
        ];

          $validator = Validator::make($request->all(), $rules, $messages);
             if($validator->fails())
              {
            	return redirect()->back()->withErrors($validator);
        	  }
        else {
        	$customer = new Customer ;
        	$customer->name = $request->input('name');
        	$customer->add = $request->input('add');
        	$customer->email = $request->input('email');
        	$customer->phone_number = $request->input('phonenumber');
        	$customer->password = bcrypt($request->input('name'));

        	$customer->save();
        	 return redirect()->route('login');
        }
    

 	}
}
