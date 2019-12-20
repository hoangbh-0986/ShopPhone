<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getlogin()
    {
    	return view ('login');
    }

    public function postlogin(Request $request)
    {
    public function postLogin(Request $request)
    {
   		$username = $request->input('username');
	    $password = $request->input('password'); 
    }
    } 
}
