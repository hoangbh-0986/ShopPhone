<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producer;
use App\Product;
class MyController extends Controller
{
    public function index()
     {
     
      //    $products = DB::table('Products')->select('*');
      //    $products = $products->get();
    	 // return view ('Index',compact('products'));
        $proc = Product::all();
        $producer = Producer::all();
        return view ('Index',compact('proc','producer'));
    }


    public function shop()
    {
        
         $product = Product::all();
         return view ('Shop',compact('product'));

    }


    public function detail($id)
    {
    	 $news = Product::findOrFail($id);
         return view('Detail', compact('news'));
    }

    public function pay()
    {
    	return view ('Pay');
    }

    public function cart()
    {
    	return view ('Cart');
    }


    public function probyManu($ma)
    {

        $pro = Producer::findOrFail($ma)->Product;
      //  $pro = Producer::where('Product_id','=',$ma)->select('*');

        return view ('ProductByManufacturer',compact('pro'));
    } 

}
