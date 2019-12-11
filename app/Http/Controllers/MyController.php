<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
    	return view ('Index');
    }


    public function shop()
    {
    	return view ('Shop');
    }


    public function detail()
    {
    	return view ('Detail');
    }

    public function pay()
    {
    	return view ('Pay');
    }

    public function cart()
    {
    	return view ('Cart');
    }
}
