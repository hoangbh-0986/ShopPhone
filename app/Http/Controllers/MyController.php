<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\producer;
use App\product;
class MyController extends Controller
{
    public function index()
     {
     
         $products = DB::table('Products')->select('*');
         $products = $products->get();
    	return view ('Index',compact('products'));
       //   $producer = App\Product::all();
        // return view ('Index');
        // $a = DB::table('Producers')->select('*');
        // $a = $a->get();
        // return view ('Index',compact('a'));
    }


    public function shop()
    {
         $products = DB::table('Products')->select('*');
         $products = $products->get();
        return view ('Shop',compact('products'));
    }


    public function detail()
    {
    	 // $news = Products::where('Product_id', '=', $id)->select('*')->first();
      //   return view('Detail', compact('news'));
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
    public function login()
    {
    	return view ('login');
    }

}
